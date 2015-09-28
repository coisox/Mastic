<?php 
include('../system_prerequisite.php');	
include('../custom/system-init.php');
//checkLogout($mySession,$cas,$_GET['logout']);






if(PAGE_RESPONSE_ENABLED)
	$start = utime();

checkLogout($mySession,$cas,$_GET['logout']);
setDefaultLanguage();
checkIfLanguageChanged($myQuery);
checkDebugStatus();
urlSecurity();

if($_GET['menuID'])
{
	//check public page
	if(!$_SESSION['userID'])
	{
		//check public page
		$publicMenu = "select * from FLC_MENU where MENUID = ".$_GET['menuID']." and LINKTYPE = 'P'";
		$publicMenuRs = $myQuery->query($publicMenu,'SELECT','NAME');
		$publicMenuRsCount = count($publicMenuRs);
	}
}

//if have post
if(is_array($_POST))
	$_POST = convertToDBSafe($_POST);

//get accessible menu
if((!$_SESSION['MENU'] || $_POST['menuForceRefresh']) && $_SESSION['userID'])
	$_SESSION['MENU'] = $mySQL->getMenuList('',false);

//get theme,theme_folder & layout
$getLayoutRs = LoadUserTheme($myQuery);

//get settings for hide/show menu & header
$styles = BlockDisplayProperties();



include('custom/system-init.php');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<script src='js/jquery.js'></script>
	</head>

	<body>
		<input type="text" placeholder="username">
		<input type="text" placeholder="password">
        <a href="dashboard.php">Login</a>
	</body>
</html>