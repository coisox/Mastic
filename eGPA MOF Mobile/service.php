<?php 
session_start();
//required file (configurations, etc)
include_once('../system_prerequisite.php');


//create BL (call global BL - insert pageid to call specific by page)*
//createPhpBl('');
$actionid=$_GET['actionid'];

$BLSQL = "";

//include('../db.php');
//include('../func_sys.php');

//$userID = $_SESSION['userID'];
//$currentRoleId = $_SESSION['CurrentRoleId'];
//$currentUserTypeId = $_SESSION['CurrentUserTypeId'];

//echo "userID=" . $userID . "   ----currentRoleId=" . $currentRoleId . "     ---currentUserTypeId=" . $currentUserTypeId;

//createPhpBl('4949');
//return;

createPhpBl('');


if ($actionid == 'getSenaraiTindakan')
{

	//Author 	: Hasnol Mizam
	//Date 	: 1 June 2015
	//BL Name : BL_P_BEBAN_KERJA
	//SESSION : MOBILE_SQL_LIST_ACTION_BPK
	//
	
	//BL_P_BEBAN_KERJA();
	//$BLSQL = getBL('148');
	//echo $BLSQL;
	
	
	$searchText = $_REQUEST['searchText'];

	
	//$selectListActionBPK = $BLSQL ;
	//$selectListActionBPK = $_SESSION['MOBILE_SQL_LIST_ACTION_BPK'] ;
	
	//echo $selectListActionBPK;
	//return;
	
$selectListActionBPK = "SELECT APPLICATION.APP_PRIORITY, APPLICATION.APP_ID AS APP_ID,
		(CASE APPLICATION.APP_PRIORITY 
			WHEN 1 THEN '<font color=#FF0000><b>SERTA MERTA</b></font>'
			WHEN 2 THEN '<font color=#FF69B4><b>SEGERA</b></font>'  
			WHEN 3 THEN '<font color=#000000><b>BIASA</b></font>' 
			ELSE '-' END) AS ARAHAN_TINDAKAN, 
		(CASE 
			WHEN APPLICATION.APP_TYPE IN ('{CONST|PKHAS}','{CONST|APK}','{CONST|KKS}','{CONST|ST}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE30}+1 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_GREEN} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE30}+1 )
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_YELLOW} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= 0 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_RED} />'
				ELSE NULL END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE30} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			WHEN APPLICATION.APP_TYPE IN ('{CONST|RTA}','{CONST|MHA}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE10}+1 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_GREEN} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE10}+1 )
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_YELLOW} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= 0 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_RED} />'
				ELSE NULL END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE10} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			WHEN APPLICATION.APP_TYPE IN ('{CONST|RTS}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE14}+1 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_GREEN} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE14}+1 )
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_YELLOW} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >=0 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_RED} />'
				ELSE NULL END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE14} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			ELSE NULL 
		END) AS TEMPOH,	
		(CASE 
			WHEN APPLICATION.APP_TYPE IN ('{CONST|PKHAS}','{CONST|APK}','{CONST|KKS}','{CONST|ST}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE30}+1 ) 
					THEN '#66d599'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE30}+1 )
					THEN '#fffa66'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= 0 ) 
					THEN '#ff6666'
				ELSE '#fff' END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE30} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			WHEN APPLICATION.APP_TYPE IN ('{CONST|RTA}','{CONST|MHA}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE10}+1 ) 
					THEN '#66d599'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE10}+1 )
					THEN '#fffa66'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= 0 ) 
					THEN '#ff6666'
				ELSE '#fff' END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE10} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			WHEN APPLICATION.APP_TYPE IN ('{CONST|RTS}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE14}+1 ) 
					THEN '#66d599'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE14}+1 )
					THEN '#fffa66'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >=0 ) 
					THEN '#ff6666'
				ELSE '#fff' END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE14} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			ELSE NULL 
		END) AS TEMPOHWARNA,	
		UPPER(REF_KATEGORI_PERMOHONAN.KPOHON_DESC)  AS KATEGORI_PERMOHONAN, 
		REF_MINISTRY.MINISTRY_DESC AS KEMENTERIAN_PEMOHON, 
		REF_AGENCY.AGENCY_DESC AS AGENSI_PEMOHON,
		UPPER(APPLICATION.APP_TITLE) AS TAJUK_PERMOHONAN, 
		(CASE REF_KATEGORI_PEROLEHAN.CP_DESC
		WHEN '' THEN '-' ELSE UPPER(REF_KATEGORI_PEROLEHAN.CP_DESC) END) AS KAT_PEROLEHAN,
		DATE_FORMAT(ACTION.DATE_SUBMIT, '%d/%m/%Y %h:%i:%s %p') AS DATE_SUBMIT,
		REF_ACTION_TYPE.ACTION_DESCRIPTION AS STATUS,
		{CONST|DB_EGPA}.URL_PARAM_2(APPLICATION.APP_ID, ACTION.ACTION_TYPE, APPLICATION.APP_TYPE, 
		APPLICATION.KATEGORI_PEROLEHAN) AS TINDAKAN
		FROM 
		{CONST|DB_EGPA}.APPLICATION 
		INNER JOIN egpa_usr.ACTION ON ACTION.APP_ID = APPLICATION.APP_ID	
		INNER JOIN egpa_usr.REF_ACTION_TYPE ON ACTION.ACTION_TYPE = REF_ACTION_TYPE.ID 	
		INNER JOIN egpa_usr.REF_KATEGORI_PERMOHONAN ON REF_KATEGORI_PERMOHONAN.KPOHON_CODE=APPLICATION.APP_TYPE
		LEFT JOIN egpa_usr.REF_KATEGORI_PEROLEHAN ON REF_KATEGORI_PEROLEHAN.CP_CODE=APPLICATION.KATEGORI_PEROLEHAN   
		LEFT JOIN egpa_usr.PRUSER_EXTENDED UP ON UP.USER_ID = ACTION.OFFICER_ID
		LEFT JOIN egpa_usr.REF_MINISTRY ON REF_MINISTRY.MINISTRY_CODE=APPLICATION.KEMENTERIAN_PEMOHON 
		LEFT JOIN egpa_usr.REF_AGENCY ON REF_AGENCY.AGENCY_CODE=APPLICATION.AGENSI_PEMOHON   
		WHERE 
		ACTION.ACTION_STATUS = '{CONST|ACTION_STATUS_PENDING}' 
		AND ACTION.ACTION_REF_ROLE = UP.CURRENT_ROLE_ID
				AND UP.CURRENT_ROLE_ID IN ('5','6','7','8','9','10','11','12','34','35','36')   
		AND UP.USER_ID = ACTION.OFFICER_ID  
		AND UP.USER_ID = '{SESSION|userID}'  
				AND ACTION_DESCRIPTION = 'KELULUSAN MEMORANDUM' ";
				
				
		if ($searchText != "")
		{
			$selectListActionBPK = $selectListActionBPK . " AND (LOWER(REF_KATEGORI_PERMOHONAN.KPOHON_DESC) LIKE '%" . $searchText . "%' 
				OR LOWER(REF_MINISTRY.MINISTRY_DESC) LIKE '%" . $searchText . "%' 
				OR LOWER(REF_AGENCY.AGENCY_DESC) LIKE '%" . $searchText . "%' 
				OR LOWER(APPLICATION.APP_TITLE) LIKE '%" . $searchText . "%' 
				OR LOWER(REF_ACTION_TYPE.ACTION_DESCRIPTION) LIKE '%" . $searchText . "%') ";
		}
					
					
					
					
		$selectListActionBPK = $selectListActionBPK  . " ORDER BY ACTION.DATE_SUBMIT DESC";

		//=======AND UP.CURRENT_ROLE_ID = '{SESSION|CurrentRoleId}'
		
		

	//$selectListActionBPK = "SELECT '1' AS USER FROM DUAL WHERE UP.USER_ID = '{SESSION|userID}' ";
	//echo $test;
	//return;
	
	$selectListActionBPK  = convertDBSafeToQuery($selectListActionBPK);
	//echo $selectListActionBPK;

	//$_POST['SQL_LIST_ACTION_BPK'] = $selectListActionBPK;
		
	//echo $selectListActionBPK;
	
	$getInfoAppRs = $myQuery->query($selectListActionBPK, 'SELECT', 'NAME');
				//$getInfoAppRs = $myQuery->query($getInfoApp);
				
				//return $getInfoAppRs;
				//$getInfoPegMejaRs[0]['APP_ID']
				//$encode = array();
				//while($row = mysqli_fetch_assoc($getInfoAppRs)) {
				//foreach($getInfoAppRs as $row)
				//	{
				//	   $encode[] = $row;
				//	}
					
				//echo json_encode($encode);
	echo json_encode($getInfoAppRs);  
		


}
else if ($actionid == 'getSenaraiTindakan_BACKUP')
{

	//Author 	: Hasnol Mizam
	//Date 	: 1 June 2015
	//BL Name : BL_P_BEBAN_KERJA
	//SESSION : MOBILE_SQL_LIST_ACTION_BPK
	//
	
	//BL_P_BEBAN_KERJA();
	//$BLSQL = getBL('148');
	//echo $BLSQL;
	
	
	//$selectListActionBPK = $BLSQL ;
	$selectListActionBPK = $_SESSION['MOBILE_SQL_LIST_ACTION_BPK'] ;
	
	//echo $selectListActionBPK;
	
	//echo "=====================[". $selectListActionBPK . "]====================";

$selectListActionBPK ="SELECT APPLICATION.APP_PRIORITY, APPLICATION.APP_ID AS APP_ID,
		(CASE APPLICATION.APP_PRIORITY 
			WHEN 1 THEN '<font color=#FF0000><b>SERTA MERTA</b></font>'
			WHEN 2 THEN '<font color=#FF69B4><b>SEGERA</b></font>'  
			WHEN 3 THEN '<font color=#000000><b>BIASA</b></font>' 
			ELSE '-' END) AS ARAHAN_TINDAKAN, 
		(CASE 
			WHEN APPLICATION.APP_TYPE IN ('{CONST|PKHAS}','{CONST|APK}','{CONST|KKS}','{CONST|ST}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE30}+1 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_GREEN} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE30}+1 )
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_YELLOW} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE30} ) && (datediff(table1.DATECOMPLETE,now()) >= 0 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_RED} />'
				ELSE NULL END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE30} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			WHEN APPLICATION.APP_TYPE IN ('{CONST|RTA}','{CONST|MHA}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE10}+1 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_GREEN} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE10}+1 )
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_YELLOW} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE10} ) && (datediff(table1.DATECOMPLETE,now()) >= 0 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_RED} />'
				ELSE NULL END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE10} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			WHEN APPLICATION.APP_TYPE IN ('{CONST|RTS}') THEN 
				(SELECT CASE 
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MAX_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MED_RULE14}+1 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_GREEN} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MED_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >= {CONST|MIN_RULE14}+1 )
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_YELLOW} />'
				WHEN (datediff(table1.DATECOMPLETE,now()) <= {CONST|MIN_RULE14} ) && (datediff(table1.DATECOMPLETE,now()) >=0 ) 
					THEN '<img border=0 src={CONST|TEMPOH_GROUP_RED} />'
				ELSE NULL END
				FROM egpa_usr.ACTION ACT
				INNER JOIN 
				(SELECT ID, APP_ID, DATE_ADD(ACTION.DATE_DONE, Interval {CONST|MAX_RULE14} DAY) AS DATECOMPLETE 
				FROM egpa_usr.ACTION 
				where (
				ACTION_TYPE='{CONST|ACTION_PKHAS_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_PP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_PKHAS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_RTA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_BP_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_MHA_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_KKS_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_ST_KJ_BPK_10}' OR 
				ACTION_TYPE='{CONST|ACTION_APK_KJ_BPK_10}' ) AND IS_LENGKAP=1 
				GROUP BY APP_ID
				) AS table1
				where table1.ID = ACT.ID AND table1.APP_ID = ACT.APP_ID AND ACT.APP_ID = APPLICATION.APP_ID)
			ELSE NULL 
		END) AS TEMPOH,			
		UPPER(REF_KATEGORI_PERMOHONAN.KPOHON_DESC)  AS KATEGORI_PERMOHONAN, 
		REF_MINISTRY.MINISTRY_DESC AS KEMENTERIAN_PEMOHON, 
		REF_AGENCY.AGENCY_DESC AS AGENSI_PEMOHON,
		UPPER(APPLICATION.APP_TITLE) AS TAJUK_PERMOHONAN, 
		(CASE REF_KATEGORI_PEROLEHAN.CP_DESC
		WHEN '' THEN '-' ELSE UPPER(REF_KATEGORI_PEROLEHAN.CP_DESC) END) AS KAT_PEROLEHAN,
		DATE_FORMAT(ACTION.DATE_SUBMIT, '%d/%m/%Y %h:%i:%s %p') AS DATE_SUBMIT,
		REF_ACTION_TYPE.ACTION_DESCRIPTION AS STATUS,
		{CONST|DB_EGPA}.URL_PARAM_2(APPLICATION.APP_ID, ACTION.ACTION_TYPE, APPLICATION.APP_TYPE, 
		APPLICATION.KATEGORI_PEROLEHAN) AS TINDAKAN
		FROM 
		{CONST|DB_EGPA}.APPLICATION 
		INNER JOIN egpa_usr.ACTION ON ACTION.APP_ID = APPLICATION.APP_ID	
		INNER JOIN egpa_usr.REF_ACTION_TYPE ON ACTION.ACTION_TYPE = REF_ACTION_TYPE.ID 	
		INNER JOIN egpa_usr.REF_KATEGORI_PERMOHONAN ON REF_KATEGORI_PERMOHONAN.KPOHON_CODE=APPLICATION.APP_TYPE
		LEFT JOIN egpa_usr.REF_KATEGORI_PEROLEHAN ON REF_KATEGORI_PEROLEHAN.CP_CODE=APPLICATION.KATEGORI_PEROLEHAN   
		LEFT JOIN egpa_usr.PRUSER_EXTENDED UP ON UP.USER_ID = ACTION.OFFICER_ID
		LEFT JOIN egpa_usr.REF_MINISTRY ON REF_MINISTRY.MINISTRY_CODE=APPLICATION.KEMENTERIAN_PEMOHON 
		LEFT JOIN egpa_usr.REF_AGENCY ON REF_AGENCY.AGENCY_CODE=APPLICATION.AGENSI_PEMOHON   
		WHERE 
		ACTION.ACTION_STATUS = '{CONST|ACTION_STATUS_PENDING}' 
		AND ACTION.ACTION_REF_ROLE = UP.CURRENT_ROLE_ID 
		AND UP.CURRENT_ROLE_ID = '{SESSION|CurrentRoleId}'
		AND UP.USER_ID = ACTION.OFFICER_ID  
		AND UP.USER_ID = '{SESSION|userID}'  
		ORDER BY ACTION.DATE_SUBMIT DESC";


	$selectListActionBPK  = convertDBSafeToQuery($selectListActionBPK);
	//echo $selectListActionBPK;

	$_POST['SQL_LIST_ACTION_BPK'] = $selectListActionBPK;

	$getInfoAppRs = $myQuery->query($selectListActionBPK, 'SELECT', 'NAME');
				//$getInfoAppRs = $myQuery->query($getInfoApp);
				
				//return $getInfoAppRs;
				//$getInfoPegMejaRs[0]['APP_ID']
				//$encode = array();
				//while($row = mysqli_fetch_assoc($getInfoAppRs)) {
				//foreach($getInfoAppRs as $row)
				//	{
				//	   $encode[] = $row;
				//	}
					
				//echo json_encode($encode);
	echo json_encode($getInfoAppRs);  

}
else if ($actionid == 'getHeader')
{
	include_once('../func_sys.php');
	
	$appId = $_REQUEST['appId'];
	//echo $appId . "";
	//BL_A_VIEW_05_0_TO_18_0();
	executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*
	
	
	$_SESSION['MOBILE_SQL_1_BL_A_VIEW_05_0_TO_18_0'] = "SELECT 
			APP_ID, PROJECT_ID, PROJECT.PR_NAMA_PROJEK, 
			APP_NO, DATE_FORMAT(APP_DATE, '%d/%m/%Y %h:%i %p') AS APP_DATE, 
			APP_TYPE, KP.KPOHON_DESC AS APP_TYPE_DESC,  
			KATEGORI_PEROLEHAN, CP.CP_DESC AS KATEGORI_PEROLEHAN_DESC, 
			APP_TITLE, APP_STATUS, 
			NO_RUJUKAN_FAIL_AGENSI, APP_REG_OFFICER, KOD_UNIT, 
			KEMENTERIAN_PEMOHON, AGENSI_PEMOHON, PTJ, 
			KEMENTERIAN_PENGGUNA, AGENSI_PENGGUNA, KEMENTERIAN_PELAKSANA, AGENSI_PELAKSANA,
			KOD_LUAR_NEGARA, PUNCA_PERMOHONAN, KETERANGAN_PUNCA_PERMOHONAN, PUNCA_PERMOHONAN_SYARIKAT,
			PUNCA_PERMOHONAN_AHLI_PARLIMEN, JENIS_PEROLEHAN, 
			PROJECT_BACKGROUND, IS_PERANCANGAN, IS_PERUNTUKAN, APP_COMMENT, PEGAWAI_PEMPROSES,  
			PBM_AGENCY, PBM_AGENCY_IS_ONLINE, PBM_AGENCY_STATUS, PBM_AGENCY_ULASAN,
			MEMO_PERTIMBANGAN, MP.PERTIMBANGAN_DESC AS MEMO_PERTIMBANGAN_DESC,
			APP_ACTION,
			NO_RUJUKAN_FAIL_BPK, APP_PRIORITY, ULASAN_BPK, SYOR_BPK,LATARBELAKANG_BPK, 
			DATE_FORMAT(APPROVED_DATE, '%d/%m/%Y') AS APPROVED_DATE,
			APPROVED_BY, APPROVED_COMMENT, IS_ONLINE, SEBAB_OFFLINE,
			APP_STATUS_KEPUTUSAN, ST.STATUS_DESC AS KEPUTUSAN_DESC, 
			DATE_FORMAT(TKH_SURAT_LULUS, '%d/%m/%Y') AS DATE_SURAT_KEPUTUSAN,
			DATE_FORMAT(TKH_SURAT_SIGN, '%d/%m/%Y') AS DATE_SURAT_KEPUTUSAN_SIGNED,
			SURAT_SIGNED_BY,
			DATE_FORMAT(TKH_SURAT_NIAT, '%d/%m/%Y') AS DATE_SURAT_NIAT, 
            DATE_FORMAT(TKH_SURAT_NIAT_SIGN, '%d/%m/%Y') AS DATE_SURAT_NIAT_SIGNED, 
            DATE_FORMAT(TKH_SURAT_SST, '%d/%m/%Y') AS DATE_SURAT_SST,
			DATE_FORMAT(TKH_SURAT_SST_SIGN, '%d/%m/%Y') AS DATE_SURAT_SST_SIGNED,
			UPDATED_BY, UPDATED_DATE
		FROM {CONST|DB_EGPA}.APPLICATION 
		LEFT JOIN {CONST|DB_EGPA}.PROJECT ON PROJECT.PR_PROJEK_ID = APPLICATION.PROJECT_ID
		LEFT JOIN {CONST|DB_EGPA}.REF_KATEGORI_PERMOHONAN KP ON KP.KPOHON_CODE = APPLICATION.APP_TYPE 
		LEFT JOIN {CONST|DB_EGPA}.REF_KATEGORI_PEROLEHAN CP ON CP.CP_CODE = APPLICATION.KATEGORI_PEROLEHAN 
		LEFT JOIN {CONST|DB_EGPA}.REF_STATUS ST ON ST.STATUS_CODE = APPLICATION.APP_STATUS_KEPUTUSAN 
		LEFT JOIN {CONST|DB_EGPA}.REF_MEMO_PERTIMBANGAN MP ON MP.PERTIMBANGAN_CODE = APPLICATION.MEMO_PERTIMBANGAN 
		WHERE APP_ID = ". $appId ;
	
		
	$getInfoApp = $_SESSION['MOBILE_SQL_1_BL_A_VIEW_05_0_TO_18_0'];	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);

	//echo $getInfoApp;

	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  
	
	//$mySQL = $_SESSION['MOBILE_SQL_1_BL_A_VIEW_05_0_TO_18_0'];
	//echo "=========================================YANGPERTAMA[" . $mySQL . "]=========================================";
	//$mySQL  = convertDBSafeToQuery($mySQL);
	//echo "=========================================LEPAS CONVERT[" . $mySQL . "]=========================================";
	//$getInfoAppRs = $myQuery->query($mySQL, 'SELECT', 'NAME');
	//echo "HASIL============>" . json_encode($getInfoAppRs);  
	
	
}	
else if ($actionid == 'ListDokumenSokongan')
{
	//include('../func_sys.php');
	//BL_A_VIEW_05_0_TO_18_0();
	//executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*
	
	$appIdParam = $_REQUEST['appId'];
	
		$_SESSION['MOBILE_SQL_6_BL_A_VIEW_05_0_TO_18_0'] = "SELECT a.ID,  a.DOCTYPE, a.CREATED_BY,  a.DESCRIPTION as 'KETERANGAN',
			a.Filename as 'NAMAFAIL', b.NAME as 'NAMA', 
			a.DATE_CREATED as 'TARIKH', 
			CONCAT('<a href=\"../custom/download.php?id=',a.ID,'\">MUAT TURUN</a>') as MUATTURUN,
            CONCAT('<a href=\"../custom/download.php?id=',a.ID,'\"><button class=\"button button-block button-positive\">MUAT TURUN</button></a>') as MUATTURUNBUTTON 
			FROM   egpa_usr.DOCUMENT_MGMT a
			INNER JOIN egpa_corrad.PRUSER b ON b.USERID= a.CREATED_BY
			LEFT JOIN egpa_usr.KEYWORD K ON K.ID = a.DOCTYPE
			WHERE a.REF_ID = '$appIdParam'  
			AND (a.DOCTYPE IN ('749','949'))";
	
	
	$getInfoApp = $_SESSION['MOBILE_SQL_6_BL_A_VIEW_05_0_TO_18_0'];	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  

	
	
}	
else if ($actionid == 'ListDokumenBerkaitan')
{
	//include('../func_sys.php');
	//BL_A_VIEW_05_0_TO_18_0();
	//executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*
	
	/*
	$_SESSION['MOBILE_SQL_2_BL_A_VIEW_05_0_TO_18_0'] = "SELECT  K.DESCRIPTION as 'KETERANGAN', 
		a.Filename as 'NAMAFAIL',b.NAME as 'MUATNAIKOLEH', 
		DATE_FORMAT(a.DATE_CREATED, '%d/%m/%Y %h:%i %p') as 'TARIKHMUATNAIK',
		CONCAT('<a href=\"../custom/download.php?id=',a.ID,'\">MUAT TURUN</a>') as MUATTURUN
		FROM  egpa_corrad.PRUSER b, egpa_usr.DOCUMENT_MGMT a
		LEFT JOIN egpa_usr.KEYWORD K ON K.ID = a.DOCTYPE
		WHERE 
		a.CREATED_BY = b.USERID  
		AND a.REF_ID = '1173'";
	*/
	
	//$getInfoApp = $_SESSION['MOBILE_SQL_2_BL_A_VIEW_05_0_TO_18_0'];	 
	
	$appId = $_REQUEST['appId'];
	
	///HASNOLMIZAM_04062015 --> refer PAGE EDITOR : Dokumen Berkaitan
	//===============================================================
	$getInfoApp = "SELECT K.DESCRIPTION as 'KETERANGAN', 
		a.Filename as 'NAMAFAIL',b.NAME as 'MUATNAIKOLEH', 
		DATE_FORMAT(a.DATE_CREATED, '%d/%m/%Y %h:%i %p') as 'TARIKHMUATNAIK',
		CONCAT('<a href=\"../custom/download.php?id=',a.ID,'\">MUAT TURUN</a>') as MUATTURUN,
		CONCAT('<a href=\"../custom/download.php?id=',a.ID,'\"><button class=\"button button-block button-positive\">MUAT TURUN</button></a>') as MUATTURUNBUTTON
		FROM   egpa_usr.DOCUMENT_MGMT a
					INNER JOIN egpa_usr.KEYWORD K ON K.ID = a.DOCTYPE
					INNER JOIN egpa_corrad.PRUSER b ON b.USERID =  a.CREATED_BY
					INNER JOIN egpa_corrad.FLC_USER_GROUP_MAPPING GM ON GM.USER_ID = b.USERID
					INNER JOIN egpa_corrad.FLC_USER_GROUP G ON G.GROUP_ID = GM.GROUP_ID	
		WHERE 
		G.GROUP_TYPE = 3 	
		AND a.REF_ID = '$appId'
		GROUP BY a.ID";
		
	
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	//echo 	$getInfoApp;
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  
}	
else if ($actionid == 'getDefaultSelectKepada')
{
		$appIdParam = $_REQUEST['appId'];
		$userId = $_SESSION['userID'];
		$selectKepadaX = "";
		
		if ($appIdParam != '') {
			
			$actionPending = "PENDING";
			$statusButton = "1"; //KEPUTUSAN MEMORANDUM 
			
			
			executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*
			$selectKepadaX = $_SESSION['MOBILE_pegProsesUserId'];
			$selectKepadaX = $_SESSION['MOBILE_pegProsesUserId'];
			
			$mySQL =  "SELECT CONCAT ('3,','$selectKepadaX') AS selectKepadaX from dual";
				        
			$getCurrActionInfoRs = $myQuery->query($mySQL, 'SELECT', 'NAME');	
			
			echo json_encode($getCurrActionInfoRs[0]);  

		}
		
}
else if ($actionid == 'getKeputusan')
{
		$appIdParam = $_REQUEST['appId'];
		$userId = $_SESSION['userID'];
		$keputusanTarikh = "";
		$keputusanUlasan = "";
		$keputusan = "";
		$minitPegawai = "";
		
		//echo "appIdParam====>" . $appIdParam;
		
		if($appIdParam != '') {
			
			$actionPending = "PENDING";
			$statusButton = "1"; //KEPUTUSAN MEMORANDUM 
			
			
			
			$getCurrActionInfo = 
				"SELECT ID, DATE_SUBMIT, DATE_DONE, ACTION_STATUS, ACTION_COMMENT, 
				ACTION_TYPE, OFFICER_ID, ASSIGN_BY_ID, ACTION_REF_ROLE,
				IS_SEMAK, IS_AKUAN, 
				PREV_ACTION_ID 
				FROM {CONST|DB_EGPA}.ACTION 
				WHERE APP_ID = '$appIdParam' AND ACTION_STATUS = '$actionPending' "; 
			
				$getCurrActionInfo  = convertDBSafeToQuery($getCurrActionInfo);
				
				$getCurrActionInfoRs = $myQuery->query($getCurrActionInfo, 'SELECT', 'NAME');
				$getCurrActionInfoRsCount = count($getCurrActionInfoRs);
				
				$currActionId = $getCurrActionInfoRs[0]['ID'];
				$actionDateSubmit = $getCurrActionInfoRs[0]['DATE_SUBMIT'];
				$actionDateDone = $getCurrActionInfoRs[0]['DATE_DONE'];
				$actionStatus = $getCurrActionInfoRs[0]['ACTION_STATUS'];
				$actionComment = $getCurrActionInfoRs[0]['ACTION_COMMENT'];
				$actionType = $getCurrActionInfoRs[0]['ACTION_TYPE'];
				$actionTo = $getCurrActionInfoRs[0]['OFFICER_ID'];
				$actionFrom = $getCurrActionInfoRs[0]['ASSIGN_BY_ID'];
				$actionRefRole = $getCurrActionInfoRs[0]['ACTION_REF_ROLE'];
				$prevActionId = $getCurrActionInfoRs[0]['PREV_ACTION_ID'];
				$isSemak = $getCurrActionInfoRs[0]['IS_SEMAK'];
				$isAkuan = $getCurrActionInfoRs[0]['IS_AKUAN'];
							
		
		
			//----------------------------------			
			$mySQL = "SELECT APPROVED_COMMENT AS keputusanUlasanX, DATE_FORMAT(APPROVED_DATE, '%d/%m/%Y') AS keputusanTarikhX, 
						APP_STATUS_KEPUTUSAN AS keputusanX, APPROVED_BY as userIdApprovedX 			
					FROM egpa_usr.APPLICATION 
						WHERE 
						APP_ID = ".$appIdParam;
						
			$getCurrActionInfoRs = $myQuery->query($mySQL, 'SELECT', 'NAME');	
			
			$keputusanUlasan = $getCurrActionInfoRs[0]['keputusanUlasanX'];
			$keputusanTarikh = $getCurrActionInfoRs[0]['keputusanTarikhX'];
			$keputusan = $getCurrActionInfoRs[0]['keputusanX'];			
			$userIdApproved = $getCurrActionInfoRs[0]['userIdApprovedX'];
			
			//----------------------------------			
			$mySQL =  "SELECT ACTION_COMMENT AS minitPegawai, OFFICER_ID as officerID  
						FROM egpa_usr.ACTION 
						WHERE 
						APP_ID = '$appIdParam'  
				        AND ID = '$currActionId'";
				        
			$getCurrActionInfoRs = $myQuery->query($mySQL, 'SELECT', 'NAME');	
			
			$minitPegawai = $getCurrActionInfoRs[0]['minitPegawai'];
			$officerID = $getCurrActionInfoRs[0]['officerID'];


			//----------------------------------			

			
			$mySQL =  "SELECT '$keputusanUlasan' AS keputusanUlasanX, 
						 '$keputusanTarikh' AS keputusanTarikhX, 
						  '$keputusan' AS keputusanX, 
						   '$userIdApproved' AS userIdApprovedX, 
						    '$minitPegawai' AS minitPegawaiX, 
						     '$officerID' AS officerIDX from dual";
				        
			$getCurrActionInfoRs = $myQuery->query($mySQL, 'SELECT', 'NAME');	
			
			echo json_encode($getCurrActionInfoRs[0]);  

		}
		
}
else if ($actionid == 'simpanKeputusan')
{
		$appIdParam = $_REQUEST['appId'];
		$userId = $_SESSION['userID'];
		$keputusanTarikh = $_REQUEST['keputusanTarikh'];
		$keputusanUlasan = $_REQUEST['keputusanUlasan'];
		$keputusan = $_REQUEST['keputusan'];
		$nextActionMinitA = $_REQUEST['minitPegawai'];
		$nextActionMinit = "";
		
		//echo "appIdParam====>" . $appIdParam;
		
		if($appIdParam != '') {
			
			$actionPending = "PENDING";
			$statusButton = "1"; //KEPUTUSAN MEMORANDUM 
		
			//******************************get Current Action******************************//
			$getCurrActionInfo = 
				"SELECT ID, DATE_SUBMIT, DATE_DONE, ACTION_STATUS, ACTION_COMMENT, 
				ACTION_TYPE, OFFICER_ID, ASSIGN_BY_ID, ACTION_REF_ROLE,
				IS_SEMAK, IS_AKUAN, 
				PREV_ACTION_ID 
				FROM {CONST|DB_EGPA}.ACTION 
				WHERE APP_ID = '$appIdParam' AND ACTION_STATUS = '$actionPending' "; 
			
				$getCurrActionInfo  = convertDBSafeToQuery($getCurrActionInfo);
				
				$getCurrActionInfoRs = $myQuery->query($getCurrActionInfo, 'SELECT', 'NAME');
				$getCurrActionInfoRsCount = count($getCurrActionInfoRs);
				
				$currActionId = $getCurrActionInfoRs[0]['ID'];
				$actionDateSubmit = $getCurrActionInfoRs[0]['DATE_SUBMIT'];
				$actionDateDone = $getCurrActionInfoRs[0]['DATE_DONE'];
				$actionStatus = $getCurrActionInfoRs[0]['ACTION_STATUS'];
				$actionComment = $getCurrActionInfoRs[0]['ACTION_COMMENT'];
				$actionType = $getCurrActionInfoRs[0]['ACTION_TYPE'];
				$actionTo = $getCurrActionInfoRs[0]['OFFICER_ID'];
				$actionFrom = $getCurrActionInfoRs[0]['ASSIGN_BY_ID'];
				$actionRefRole = $getCurrActionInfoRs[0]['ACTION_REF_ROLE'];
				$prevActionId = $getCurrActionInfoRs[0]['PREV_ACTION_ID'];
				$isSemak = $getCurrActionInfoRs[0]['IS_SEMAK'];
				$isAkuan = $getCurrActionInfoRs[0]['IS_AKUAN'];
				//*********************************************************************************//
				
				//if($statusButton == '1') { //KEPUTUSAN MEMORANDUM 
					//echo 'keputusan >>> '.$Keputusan; 
				
					//Update Keputusan 
					$updateAppMain = 
						"UPDATE egpa_usr.APPLICATION SET
							APPROVED_BY = '$userId',
							APPROVED_DATE  = STR_TO_DATE('$keputusanTarikh','%d/%m/%Y'), 
							APPROVED_COMMENT  = '$keputusanUlasan',
							APP_STATUS_KEPUTUSAN = '$keputusan'
						WHERE 
							APP_ID = ".$appIdParam;
					$updateAppMainRs = $myQuery->query($updateAppMain,'RUN');
				
					$nextActionMinit = $nextActionMinitA; 
					//$nextActionType = $nextActionJenisA; 
					//$nextActionKpdSplit = explode(',',$nextActionKpdA);     
			
					//$nextActionRole= $nextActionKpdSplit[0]; //role NextAction     
				//}  
				
				
				$updateCurrAction =  
				        "UPDATE egpa_usr.ACTION SET  
				            ACTION_COMMENT = '$nextActionMinit', 
							OFFICER_ID = '$userId'
				        WHERE  
				            APP_ID = '$appIdParam'  
				            AND ID = '$currActionId'";  
				$updateCurrActionRs = $myQuery->query($updateCurrAction,'RUN'); 
    			//echo "DONE!";
		}
		
}
else if ($actionid == 'TarikhSekarang')
{
	//02/06/2015 10:32:55
	$mySQL = "SELECT DATE_FORMAT(NOW(),'%d/%m/%Y %h:%i %p') AS TARIKHSEKARANG FROM DUAL";
	$getInfoAppRs = $myQuery->query($mySQL, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs[0]);  	
}	
else if ($actionid == 'TindakanSebelum')
{
	//include('../func_sys.php');
	//BL_A_VIEW_05_0_TO_18_0();
	//executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*
	$appId = $_REQUEST['appId'];
	
	$_SESSION['MOBILE_SQL_3_BL_A_VIEW_05_0_TO_18_0'] = "SELECT PR.NAME AS 'TINDAKAN_KEPADA',
						PREV.DATE_SUBMIT AS 'TARIKH_HANTAR', 
						REF_ACTION_TYPE.ACTION_DESCRIPTION AS 'JENIS_TINDAKAN',
						C_PR.NAME AS 'PREV_NAMA_PEGAWAI',
						PREV.ACTION_COMMENT AS 'MINIT_PEGAWAI'
						FROM egpa_usr.ACTION CURR
							INNER JOIN egpa_usr.ACTION PREV ON PREV.ID = CURR.PREV_ACTION_ID
							INNER JOIN egpa_usr.REF_ACTION_TYPE ON CURR.ACTION_TYPE = REF_ACTION_TYPE.ID 
							INNER JOIN egpa_corrad.PRUSER PR ON PR.USERID = CURR.OFFICER_ID
							INNER JOIN egpa_corrad.PRUSER C_PR ON C_PR.USERID = PREV.OFFICER_ID
						WHERE 
							CURR.ACTION_STATUS= 'PENDING' AND CURR.APP_ID = PREV.APP_ID 
							AND CURR.APP_ID = " . $appId;
		
	$getInfoApp = $_SESSION['MOBILE_SQL_3_BL_A_VIEW_05_0_TO_18_0'];	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	
	//echo $getInfoApp;
	
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs[0]);  
	
}	

else if ($actionid == 'RadioKeputusan')
{
	
	$tempSql = "SELECT STATUS_CODE as FLC_ID, CONCAT(STATUS_DESC,'<br/>') as FLC_NAME, STATUS_DESC as FLC_NAME_DESC   
			FROM {CONST|DB_EGPA}.REF_STATUS 
			WHERE STATUS_CODE IN ({CONST|STATUS_KEPUTUSAN_LULUS}, {CONST|STATUS_KEPUTUSAN_TIDAK_LULUS}, {CONST|STATUS_KEPUTUSAN_TANGGUH})";
		
	$getInfoApp = $tempSql;	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  
	
}	
else if ($actionid == 'SelectJenisTindakan')
{
	
	//include('../func_sys.php');
	//BL_A_VIEW_05_0_TO_18_0();
	executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*
	
	/*
	$_SESSION['MOBILE_SQL_4_BL_A_VIEW_05_0_TO_18_0'] = "SELECT ID AS FLC_ID, ACTION_DESCRIPTION AS FLC_NAME 
				FROM {CONST|DB_EGPA}.REF_ACTION_TYPE ";
		//WHERE ID = $nextActionTypeA
	*/
		
	$getInfoApp = $_SESSION['MOBILE_SQL_4_BL_A_VIEW_05_0_TO_18_0'];	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  
}	
else if ($actionid == 'SelectKepada_ORI')
{
	
	//include('../func_sys.php');
	//BL_A_VIEW_05_0_TO_18_0();
	
	$additionalConditionA = "";
	$_SESSION['MOBILE_SQL_5_BL_A_VIEW_05_0_TO_18_0'] = "SELECT CONCAT(GROUPID, ',' ,USERIDGROUP) as flc_id, CONCAT(UPPER(PRUSER.NAME), ' (', 
		UPPER(UG.DESCRIPTION), ')') as flc_name FROM PRUSER, egpa_usr.PRUSER_EXTENDED INNER JOIN 
		( SELECT a.GROUP_ID AS GROUPID, a.USER_ID AS USERIDGROUP FROM FLC_USER_GROUP_MAPPING a WHERE a.GROUP_ID IN 
		(SELECT ROLE_TYPE_ID FROM egpa_usr.ROLE_ACTION_TYPE ) ) AS tableV LEFT JOIN egpa_corrad.FLC_USER_GROUP UG ON UG.GROUP_ID = tableV.GROUPID 
		where tableV.USERIDGROUP = PRUSER.USERID AND PRUSER.USERID = PRUSER_EXTENDED.USER_ID AND PRUSER.STATUSCODE = 1 ORDER BY tableV.GROUPID ASC ,
		 PRUSER.NAME ASC ";

				//WHERE ACTION_TYPE_ID = '$nextActionTypeA' 
		
	$getInfoApp = $_SESSION['MOBILE_SQL_5_BL_A_VIEW_05_0_TO_18_0'];	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  
}	
else if ($actionid == 'SelectKepada')
{
	
	//include('../func_sys.php');
	//BL_A_VIEW_05_0_TO_18_0();
	executeBL('BL_A_VIEW_05_0_TO_18_0');  //test_constant is the BL Name*

	$getInfoApp = $_SESSION['MOBILE_SQL_5_BL_A_VIEW_05_0_TO_18_0'];	 
	$getInfoApp  = convertDBSafeToQuery($getInfoApp);
	$getInfoAppRs = $myQuery->query($getInfoApp, 'SELECT', 'NAME');
	echo json_encode($getInfoAppRs);  
}	
else if ($actionid == 'simpanKelulusan')
{
	$data = json_decode(file_get_contents('php://input'), true);
	print_r($data);
	
	//include('../func_sys.php');
	//formData
	$appId = $data['appId'];
	
	$keputusanTarikh =  $data['keputusanTarikh'];
	$keputusanUlasan =  $data['keputusanUlasan'];
	$keputusan =  $data['keputusan'];
	$nextActionMinit = $data['minitpegawai'];
	//echo "minitpegawai FINALLLL===" . $nextActionMinit;
	
	
	
	//print_r ($_POST);
	
	
	//BL_B_SAVE_CURR_ACTION_08_0a();
	
	//$sql = "SELECT ' ' FROM DUAL";
	//$getInfoAppRs = $myQuery->query($sql, 'SELECT', 'NAME');
	//echo json_encode($getInfoAppRs);
	
	
	//executeBL('BL_B_SAVE_CURR_ACTION_08_0a');  

				//Get Parameter
				$appIdParam = $data['appId'];
				$userId = $_SESSION['userID'];
				
				//Declare Variables
				$actionPending = "PENDING";
				$actionRole= $_SESSION['CurrentRoleId'];
				
				if($appIdParam != '') {
				
					//******************************get Current Action******************************//
					$getCurrActionInfo = 
						"SELECT ID, DATE_SUBMIT, DATE_DONE, ACTION_STATUS, ACTION_COMMENT, 
						ACTION_TYPE, OFFICER_ID, ASSIGN_BY_ID, ACTION_REF_ROLE,
						IS_SEMAK, IS_AKUAN, 
						PREV_ACTION_ID 
						FROM egpa_usr.ACTION 
						WHERE APP_ID = '$appIdParam' AND ACTION_STATUS = '$actionPending' "; 
					
					$getCurrActionInfoRs = $myQuery->query($getCurrActionInfo, 'SELECT', 'NAME');
					$getCurrActionInfoRsCount = count($getCurrActionInfoRs);
				
					$currActionId = $getCurrActionInfoRs[0]['ID'];
					$actionDateSubmit = $getCurrActionInfoRs[0]['DATE_SUBMIT'];
					$actionDateDone = $getCurrActionInfoRs[0]['DATE_DONE'];
					$actionStatus = $getCurrActionInfoRs[0]['ACTION_STATUS'];
					$actionComment = $getCurrActionInfoRs[0]['ACTION_COMMENT'];
					$actionType = $getCurrActionInfoRs[0]['ACTION_TYPE'];
					$actionTo = $getCurrActionInfoRs[0]['OFFICER_ID'];
					$actionFrom = $getCurrActionInfoRs[0]['ASSIGN_BY_ID'];
					$actionRefRole = $getCurrActionInfoRs[0]['ACTION_REF_ROLE'];
					$prevActionId = $getCurrActionInfoRs[0]['PREV_ACTION_ID'];
					$isSemak = $getCurrActionInfoRs[0]['IS_SEMAK'];
					$isAkuan = $getCurrActionInfoRs[0]['IS_AKUAN'];
					//*********************************************************************************//
				
						//Update Keputusan 
						$updateAppMain = 
							"UPDATE egpa_usr.APPLICATION SET
								APPROVED_BY = '$userId',
								APPROVED_DATE  = STR_TO_DATE('$keputusanTarikh','%d/%m/%Y'), 
								APPROVED_COMMENT  = '$keputusanUlasan',
								APP_STATUS_KEPUTUSAN = '$keputusan'
							WHERE 
								APP_ID = ".$appIdParam;
						$updateAppMainRs = $myQuery->query($updateAppMain,'RUN');
						//$nextActionMinit = $nextActionMinitA; 
				
				    //Update Current Action 
				    $updateCurrAction =  
				        "UPDATE egpa_usr.ACTION SET  
				            ACTION_COMMENT = '$nextActionMinit', 
							OFFICER_ID = '$userId'
				        WHERE  
				            APP_ID = '$appIdParam'  
				            AND ID = '$currActionId'";  
				    $updateCurrActionRs = $myQuery->query($updateCurrAction,'RUN'); 
				
				}


}	
else if ($actionid == 'simpanDanHantarKelulusan')
{
	/**
	 * Name          : BL_B_SAVE_NEXT_ACTION_08_0a
	 * Description	 : Saving record and Sent to Next Action Role
	 *
	 * @project       eGPA MOF
	 * @modul         ALL
	 * @author        salwati@nc.com.my
	 * @date          10/11/2014
	 * @history       
	 */
	
	//******************************Get Max Action ID***********************************//
	$getMaxActionId = 
		"SELECT IFNULL(MAX(ID),0) + 1 AS MAX_ACTION_ID FROM egpa_usr.ACTION";
	$getMaxActionIdRs = $myQuery->query($getMaxActionId, 'SELECT', 'NAME');
	$maxActionId = $getMaxActionIdRs[0]['MAX_ACTION_ID'];
	//**********************************************************************************//
	
	//Get Parameter
	$appIdParam = $_REQUEST['appId'];
	$keputusanTarikh = $_REQUEST['keputusanTarikh'];
	$keputusanUlasan = $_REQUEST['keputusanUlasan'];
	$keputusan = $_REQUEST['keputusan'];
	$nextActionMinitA = $_REQUEST['minitPegawai'];
	$nextActionMinit = "";
	$nextActionJenisA = $_REQUEST['nextActionJenisA'];
	$nextActionKpdA = $_REQUEST['nextActionKpdA'];
	$appTypeFK = $_REQUEST['appTypeFK'];
		
	
	//Declare Variables for Current Action
	$currUserId = $_SESSION['userID']; 
	
	//Declare Variables for Next Action
	$actionStatusPending = "PENDING";
	if($appIdParam != '') {
		$appId = $appIdParam;
	
		//if($statusButton == '1') { //KEPUTUSAN MEMORANDUM
			//echo 'masuk 1'; 
	
			if($keputusan == "100" ) {   //STATUS_KEPUTUSAN_LULUS
				$actionStatus = "PERMOHONAN DILULUSKAN"; //ACTION_STATUS_LULUS;
			} 
			else if($keputusan == "101" ) {  //STATUS_KEPUTUSAN_TIDAK_LULUS
				$actionStatus = "PERMOHONAN TIDAK DILULUSKAN" ; //ACTION_STATUS_TIDAK_LULUS
			} 
			else if($keputusan == "102" ) {  //STATUS_KEPUTUSAN_TANGGUH
				$actionStatus = "PERMOHONAN DITANGGUHKAN";  //ACTION_STATUS_TANGGUH
			}
	
			//Update Keputusan 
			$updateAppMain = 
				"UPDATE egpa_usr.APPLICATION SET
					APPROVED_BY = '$currUserId',
					APPROVED_DATE  = STR_TO_DATE('$keputusanTarikh','%d/%m/%Y'), 
					APPROVED_COMMENT  = '$keputusanUlasan',
					APP_ACTION = {CONST|ACTION_MEMO},
					APP_STATUS_KEPUTUSAN = '$keputusan'
				WHERE 
					APP_ID = ".$appIdParam;
					
			$updateAppMain  = convertDBSafeToQuery($updateAppMain);		
			$updateAppMainRs = $myQuery->query($updateAppMain,'RUN'); 
	
			$nextActionMinit = $nextActionMinitA; 
			$nextActionType = $nextActionJenisA; 
			$nextActionKpdSplit = explode(',',$nextActionKpdA);     
			
			$nextActionRole= $nextActionKpdSplit[0]; //role NextAction   
			
			$nextActionStatus = 'MAKLUMAN & JANA SURAT KEPUTUSAN';   
		//}
		
		
		
		
		$nextActionRole= $nextActionKpdSplit[0]; //role NextAction
		$nextUserId = $nextActionKpdSplit[1]; //userId NextAction
		
		//echo 'status semak > '.$statusSemak;
		//echo 'appId after > '.$appId;
		//echo 'nextActionRole > '.$nextActionRole;
		//echo 'nextUserId > '.$nextUserId;
		//die();
	
		//******************************Get Previous Action ID******************************//
		//$getPrevActionId = 
		//	"SELECT IFNULL(MAX(ID),0) AS PREV_ACTION_ID FROM egpa_usr.ACTION WHERE APP_ID = '$appId'"; 
		//$getPrevActionIdRs = $myQuery->query($getPrevActionId, 'SELECT', 'NAME');
		//$prevActionId = $getPrevActionIdRs[0]['PREV_ACTION_ID'];
		
		//get Pending app_id
		$getActionInfo =  
			"SELECT ID FROM egpa_usr.ACTION WHERE APP_ID = '$appId' AND ACTION_STATUS = '$actionStatusPending' ";  
		$getActionInfoRs = $myQuery->query($getActionInfo, 'SELECT', 'NAME'); 
		$currActionId = $getActionInfoRs[0]['ID']; 		
		//**********************************************************************************//
		
		//************************Get Max SerializedObjectMemo ID **************************//
		$getSerializeMemoId = 
			"SELECT IFNULL(MAX(ID),0)+1 AS MAX_MEMO_ID FROM egpa_usr.SERIALIZED_OBJECT_MEMO"; 
		$getSerializeMemoIdRs = $myQuery->query($getSerializeMemoId, 'SELECT', 'NAME');
		$serializeMemoId = $getSerializeMemoIdRs[0]['MAX_MEMO_ID'];
		//**********************************************************************************//
		
		//Insert Into Memo Log History
		//$insertSerializeMemo = 
		//	"INSERT INTO egpa_usr.SERIALIZED_OBJECT_MEMO (
		//		ID, APP_ID, DATA_LATARBELAKANG, DATA_ULASAN, DATA_SYOR, CREATED_DATE 
		//	) VALUES (
		//		'$serializeMemoId', '$appId', '$latarbelakangBPK', '$ulasanBpk', '$syorBpk', now())";
		//$insertSerializeMemoRs = $myQuery->query($insertSerializeMemo,'RUN');	
	
		//Update Current Action
		$updateCurrAction = 
			"UPDATE egpa_usr.ACTION SET 
				DATE_DONE = now(),
				ACTION_STATUS = '$actionStatus',
				ACTION_COMMENT = '$nextActionMinit',
				MEMO_ID = '$serializeMemoId'
			WHERE 
				APP_ID = '$appId' 
				AND ID = '$currActionId'"; //OBJECT_ID
		$updateCurrActionRs = $myQuery->query($updateCurrAction,'RUN');
	
		//Insert Next Action
		$insertNextAction = 
			"INSERT INTO egpa_usr.ACTION (
				ID, DATE_SUBMIT, ACTION_STATUS, ACTION_TYPE, OFFICER_ID, 
				ASSIGN_BY_ID, ACTION_REF_ROLE, APP_ID, APP_TYPE, PREV_ACTION_ID 
			) VALUES (
				'$maxActionId', now(), '$actionStatusPending', '$nextActionType', '$nextUserId', 
				'$currUserId', '$nextActionRole', '$appId', '$appTypeFK', '$currActionId' 
			)"; 
		$insertNextActionRs = $myQuery->query($insertNextAction,'RUN');	
	
		//Email Notification to Next Action Person
		//................TEMPO JAP....      BL_EMAIL_NOTIFICATION_USER('1', $nextUserId, $appId, $nextActionStatus, null);
							    //executeBL("BL_EMAIL_NOTIFICATION_USER('1', $nextUserId, $appId, $nextActionStatus, null);");  //test_constant is the BL Name*
		
		
	}
	//Succesfull Alert Message
	
	echo "OKKKKKK";

}
else if ($actionid == 'simpanDanHantarKelulusan_OLD')
{
	$data = json_decode(file_get_contents('php://input'), true);
	print_r($data);
	
	//include('../func_sys.php');
	//formData
	$appId = $data['appId'];
	$minitpegawai = $data['minitpegawai'];
	echo "minitpegawai FINALLLL===" . $minitpegawai;
	//print_r ($_POST);
	
	
	//BL_B_SAVE_CURR_ACTION_08_0a();
	
	//$sql = "SELECT ' ' FROM DUAL";
	//$getInfoAppRs = $myQuery->query($sql, 'SELECT', 'NAME');
	//echo json_encode($getInfoAppRs);
	
	
	executeBL('BL_B_SAVE_NEXT_ACTION_06_0');  //test_constant is the BL Name*
}	





?>