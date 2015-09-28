<?php 
session_start();
if ($_REQUEST['logout'] == "true")
{
	//clearkan semua session
	session_destroy();
	session_start();
	//include("login_custom.php");
	//echo "MASUK SINI... ";
	//header('Location: index.php');			
}

//include('../db.php');
include('../system_prerequisite.php');	
//include('../custom/system-init.php');	

//submit for login
//echo "--------" . $_POST['login'];
//echo "--------" . $error;
if($_POST['login'] && !$error)
{
	//echo "MASUK";
	//echo "" . $_POST['userID'] . "<br>";
	//echo "" . $_POST['userPassword'] . "<br>";
	$error = checkloginMobile($myQuery,$mySQL,$mySession,cleanData($_POST['userID']),md5($_POST['userPassword']));
	
	
	//echo "ERROR SELEPAS MASUK--------" . $error;
	include('../custom/system-init.php');	
	//echo "LEPAS LOGIN....";
	$userID  = $_SESSION['userID'];
	
	$currentRole = $_SESSION['CurrentRoleId'];
	$currentUserType = $_SESSION['CurrentUserTypeId'];
	//echo "currentRole=" . $currentRole . "     ---currentUserType=" . $currentUserType . "----userID=" . $userID;


}//eof if

if($_SESSION['userID'])
	{
	//echo "USER--->" . $_SESSION['userID'];
	//header('Location: index.php?'.$_SERVER['QUERY_STRING']);
	//header('Location: index.php');
	
	
	
	//echo "1";
	header('Location: dashboard.php');	
	}
else
	{
	//echo "2";
	include("login_custom.php");		
	}
	
	
	
	
	
	
	
	
	
	
	
	
function checkloginMobile($myQuery,$mySQL,$mySession,$username='',$password='')
{
	//check if both username and password is entered
	if($username != '' && $password != '')
	{
		//update role kepada 7
		
		//echo "AAAAAAAAAAAAAA";
		//=====================
		//$x =  $mySQL->updateUserInfoMobile($username,$password);
		//check dulu..
		$mySQL = "select USERID AS USERID, username AS USERNAME FROM egpa_corrad.PRUSER where username = '".$username."'";
			//echo "BBBBBB$mySQ==" . $mySQL;
			
		$userx = $myQuery->query($mySQL, 'SELECT','NAME');
		//echo "ccccc";
		//echo "----->" . $userx[0]['USERID'];
		$_SESSION['userID'] = $userx[0]['USERID'];
		
		//cari senarai roles yang dia ada..
		$mySQL = "select * from egpa_corrad.FLC_USER_GROUP_MAPPING where user_id = '".$_SESSION['userID']."' and group_id = 7";
		//echo "gggggg" . $mySQL;	
		
			
		$rolex = $myQuery->query($mySQL, 'SELECT','NAME');	
		
		//echo "NAK UPDATEEEEE" . $_SESSION['userID'];
		
		if ($rolex != null)
		{
			//$_SESSION['userID'] = $rolex[0]['userid'];
			//HARDCODED PERANAN SEBAGAI 7, jika user ni ada role 7 dalam table "egpa_corrad.FLC_USER_GROUP_MAPPING"
			
			//$_SESSION['MENU'] = $mySQL->getMenuList('',true,7);
				
			//echo "NAK UPDATEEEEE" . $_SESSION['userID'];	
			$updateCurrentRole = "update egpa_usr.PRUSER_EXTENDED set CURRENT_ROLE_ID = 7 where USER_ID = '".$_SESSION['userID']."'";
			$updateCurrentRoleRs = $myQuery->query($updateCurrentRole,'RUN');
			
			//echo "DAH UPDATE!!";	
			
			$_SESSION['CurrentRoleId'] = "7";
			
			/******************************** Begin: modified by SaL on 13/12/2014 **************************************/
			$rolesName = "select 
				DESCRIPTION as CURRENTROLENAME, 
				FLC_USER_GROUP.GROUP_TYPE AS CURRENTUSERTYPEID 
				from FLC_USER_GROUP 
				where GROUP_ID = ".$_SESSION['CurrentRoleId'];
			$rolesNameRs = $myQuery->query($rolesName,'SELECT','NAME');	
			
			//echo "DAH UPDATE!!222";	
				
			$_SESSION['CurrentRoleName'] = $rolesNameRs[0]['CURRENTROLENAME'];
			$_SESSION['CurrentUserTypeId'] = $rolesNameRs[0]['CURRENTUSERTYPEID']; 		
		
		}
				
				
			
						
		//check username
		//$usernameArr = $mySQL->getUserInfo($username,$password);
		
		//$usernameArr = "";
		
		$user_profile_schema 						= "PRUSER";
		$user_profile_userpassword 					= "USERPASSWORD";
		$user_profile_userid 						= "USERID";
		$user_profile_name 							= "NAME";
		$user_profile_username 						= "USERNAME";
		$user_profile_usergroupcode 				= "USERGROUPCODE";
		$user_profile_usertypecode  				= "USERTYPECODE";
		$user_profile_departmentcode				= "DEPARTMENTCODE";
		$user_profile_imagefile						= "IMAGEFILE";
		$user_profile_userchangepasswordtimestamp	= "USERCHANGEPASSWORDTIMESTAMP";

		//if have additional condition
		//if(LOGIN_CONDITION)
		//	$extraSQL = " and ".LOGIN_CONDITION." ";
			$extraSQL = "";
			
		$sql = "select 	$user_profile_userid, $user_profile_username, $user_profile_name, $user_profile_usergroupcode,
						$user_profile_usertypecode, $user_profile_departmentcode, $user_profile_imagefile,
						$user_profile_userchangepasswordtimestamp as USERCHANGEPASSWORDTIMESTAMP
				from $user_profile_schema
				where $user_profile_username = '".$username."'
				and $user_profile_userpassword = '".$password."' ".$extraSQL;
			
		$usernameArr = $myQuery->query($sql,'SELECT','NAME');	
		
		//if there exists user with username and password given, login
		if($usernameArr)
		{
			//if single user login is enabled and session active, logout other sessions
			if(LOGIN_SINGLE_USER_ENABLED)
			{
				//check login status
				$loginAudit = "select a.USER_ID, a.AUDIT_TIMESTAMP, a.AUDIT_CLIENT_IP, a.AUDIT_CLIENT_PC_NAME, a.AUDIT_SESSION_ID
							from
								(select USER_ID, AUDIT_CLIENT_IP, AUDIT_CLIENT_PC_NAME, AUDIT_SESSION_ID,
										max(AUDIT_TIMESTAMP) AUDIT_TIMESTAMP
									from FLC_AUDIT where AUDIT_ACTION = 'login'
									group by USER_ID, AUDIT_CLIENT_IP, AUDIT_CLIENT_PC_NAME, AUDIT_SESSION_ID) a left join
								(select USER_ID, AUDIT_CLIENT_IP, AUDIT_CLIENT_PC_NAME, AUDIT_SESSION_ID,
										max(AUDIT_TIMESTAMP) AUDIT_TIMESTAMP
									from FLC_AUDIT where AUDIT_ACTION like 'logout%'
									group by USER_ID, AUDIT_CLIENT_IP, AUDIT_CLIENT_PC_NAME, AUDIT_SESSION_ID) b
								on a.USER_ID = b.USER_ID and a.AUDIT_SESSION_ID = b.AUDIT_SESSION_ID
							where (a.AUDIT_TIMESTAMP > b.AUDIT_TIMESTAMP or b.AUDIT_TIMESTAMP is null)
								and a.USER_ID = ".$usernameArr[0]['USERID'];
				$loginAuditRs = $myQuery->query($loginAudit,'SELECT','NAME');
				$loginAuditRsCount = count($loginAuditRs);

				//if already logged in, update audit to logout the session
				if($loginAuditRsCount)
				{
					//loop of count of user login
					for($x=0; $x<$loginAuditRsCount; $x++)
					{
						//insert into audit table, logout other sessions
						$insertAudit = "insert into FLC_AUDIT
										(AUDIT_TIMESTAMP, AUDIT_CLIENT_IP, AUDIT_CLIENT_PC_NAME, AUDIT_SESSION_ID,
										AUDIT_REQUEST_URI, AUDIT_REQUEST_MENU_ID, AUDIT_ACTION, USER_ID)
										values (".$mySQL->currentDate().",
										'".$_SERVER['REMOTE_ADDR']."', '".gethostbyaddr($_SERVER['REMOTE_ADDR'])."',
										'".$loginAuditRs[$x]['AUDIT_SESSION_ID']."', NULL, NULL,
										'logout (auto)', ".$loginAuditRs[$x]['USER_ID'].")";
						$insertAuditRs = $myQuery->query($insertAudit,'RUN');
					}//eof for
				}//eof if
			}//eof if

			//check expiry
			if(PASSWORD_EXPIRY&&$usernameArr[0]['USERCHANGEPASSWORDTIMESTAMP'])
			{
				$currentDate = date('Y-m-d');
				$expiryDate = $usernameArr[0]['USERCHANGEPASSWORDTIMESTAMP'];

				$tempCurrentDate = explode('-',$currentDate);
				$tempExpiryDate = explode('-',$expiryDate);

				$currentTimestamp = mktime(0, 0, 0, $tempCurrentDate[1], $tempCurrentDate[2], $tempCurrentDate[0]);
				$expiryTimestamp = mktime(0, 0, 0, $tempExpiryDate[1], $tempExpiryDate[2], $tempExpiryDate[0]);

				//number of expiry days
				$chkExpired = floor(($currentTimestamp-$expiryTimestamp)/(60*60*24));
			}//eof if

			//if expired
			if($chkExpired>0)
			{
				$error = LOGIN_PASSWORD_EXPIRED;
			}
			else
			{
				//store important user data in session
				
				//echo "SIMPAN SESSIONNNNN " . $_SESSION['userID'] ;
				
				
				$_SESSION['userID'] = $usernameArr[0]['USERID'];
				$_SESSION['userName'] = $usernameArr[0]['USERNAME'];
				//$_SESSION['userPass'] = $usernameArr[0]['USERPASSWORD'];
				$_SESSION['userGroupCode'] = $usernameArr[0]['USERGROUPCODE'];
				$_SESSION['userTypeCode'] = $usernameArr[0]['USERTYPECODE'];
				$_SESSION['departmentCode'] = $usernameArr[0]['DEPARTMENTCODE'];
				$_SESSION['userImage'] = $usernameArr[0]['IMAGEFILE'];
				$_SESSION['Name'] = $usernameArr[0]['NAME'];
				
				//set login flag to true
				$_SESSION['loginFlag'] = true;

				//execute audit, store login log
				executeAudit('login');

				//if almost expired
				if(PASSWORD_EXPIRY&&abs($chkExpired)<=PASSWORD_EXPIRY_REMINDER_DAYS)
				{?>
					<script>
					//if(window.confirm('<?php echo LOGIN_PASSWORD_ALMOST_EXPIRED;?>'))
					//	window.location="<?php echo CHANGE_PASSWORD_URL;?>";
					</script>
				<?php }//eof if
			}//eof else
		}//eof if
		//show error
		else
			$error = LOGIN_INVALID_MSG;
	}

	//if either username or password not entered, load error msg
	else
		$error = LOGIN_ERROR_MSG;

	return $error;
}//eof function	




	
?>
