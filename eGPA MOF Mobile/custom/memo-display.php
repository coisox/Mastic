<?php

  $cache = '';
  if(isset($_GET['eraseCache'])){
    echo '<meta http-equiv="Cache-control" content="no-cache">';
    echo '<meta http-equiv="Expires" content="-1">';
    $cache = time();
  }
?>

<?php 

/**
 * Name          : rpt_control.php
 * Description   : Additional PHP to call report base on parameter report type and others
 *
 * @project       eGPA MOF
 * @modul         Report Control
 * @author        salwati@nc.com.my
 * @date          10/11/2014
 * @history       
 */

//<br/>
//<div align="center"><img border=0 src="report/memorandum-test.jpg" /></div><br/>
 
//Get Parameter
//$pRptType = $_GET['rpt'];
$appId = $_GET['appId'];
$appType = $_POST['appTypeFK'];
$katPerolehan = $_POST['katPerolehanFK'];
$memoPertimbangan = $_POST['typeMemoId'];

$rptURL = RPT_URL."/api/repos/:home:egpaadmin:egpa";
$rptLogin = "report?userid=".RPT_USR."&password=".RPT_PWD;

	/*
	'1', 'MEMO KPSPK' 22
	'2', 'MEMO KSPK' 22
	'3', 'MEMO TSBPK' 22
	'4', 'MEMO SBPK' 22
	'5', 'MEMO KSP' 23
	'6', 'MEMO JKPP' 20
	'7', 'MEMO JPMK II' 21
	'8', 'MEMO JPMK I' 21
	'9', 'MEMO YB MK II' 23
	'10', 'MEMO YAB MK' 23 */

	if(($memoPertimbangan == '6')){ //MEMO JKPP
		$pRptType = '20'; 
	}
	if(($memoPertimbangan == '7') || ($memoPertimbangan == '8')){ //MEMO JPMKI/JPMKII
		$pRptType = '21';
	}
	if(($memoPertimbangan == '1') || ($memoPertimbangan == '2') || ($memoPertimbangan == '3') || ($memoPertimbangan == '4')){ //MEMO SBPK/TSBPK/KSPK
		$pRptType = '22';
	}
	if(($memoPertimbangan == '5') || ($memoPertimbangan == '9') || ($memoPertimbangan == '10')){ //MEMO KSP/YBMK/YABMKII
		$pRptType = '23';
	}

//echo $pRptType;
	
if ($pRptType == '20') { //Memorandum JKPP 20	
?>
	<iframe src="<?php echo $rptURL ?>:memo_jkpp.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '21') { //Memorandum JPMK 21	
?>
	<iframe src="<?php echo $rptURL ?>:memo_jpmk.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '22') { //Memorandum SBPK,TSBPK & KSPK 22	
?>
	<iframe src="<?php echo $rptURL ?>:memo_sbpk_tsbpk_kspk.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '23') { //Memorandum YABMK, YBMKII & KSP 23	
?>
	<iframe src="<?php echo $rptURL ?>:memo_yabmk_ybmk2_ksp.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '24') { //Nota Makluman YABMK, YBMKII & KSP 24	
?>
	<iframe src="<?php echo $rptURL ?>:nota_makluman_kepada_yabmk_ybmk2_ksp.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '25') { //Surat Lulus 25	
?>
	<iframe src="<?php echo $rptURL ?>:egpa:surat_lulus.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '26') { //Surat Tolak 26	
?>
	<iframe src="<?php echo $rptURL ?>:surat_tolak.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>&random=<?php echo $cache; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '27') { //Surat Niat 27
?>
	<iframe src="<?php echo $rptURL ?>:surat_niat.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '28') { //Surat Setuju Terima 1 28	
?>
	<iframe src="<?php echo $rptURL ?>:surat_setuju_terima.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>" width="100%" height="700px"></iframe>
<?php 
}
else if ($pRptType == '29') { //Surat Setuju Terima 2 29	
?>
	<iframe src="<?php echo $rptURL ?>:surat_setuju_terima_2.prpt/<?php echo $rptLogin ?>&p_app_id=<?php echo $appId; ?>&p_app_type=<?php echo $appType; ?>&p_kat_perolehan=<?php echo $katPerolehan; ?>" width="100%" height="700px"></iframe>
<?php 
}
?>

<!--
<iframe src="http://192.168.1.100:8643/pentaho/api/repos/:home:egpaadmin:egpa:search_main.prpt/report?userid=egpaadmin&password=xs2egpaadmin&output-target=table/rtf;page-mode=flow&accepted-page=-1&showParameters=true&p_tahun=2014&renderMode=REPORT&htmlProportionalWidth=false#page=1&zoom=auto,-13,612" width="100%" height="700px"></iframe>
http://192.168.1.100:8643/pentaho/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=448&p_app_type=1&p_kat_perolehan=4
-->
<!--
<iframe src="http://192.168.1.100:8643/pentaho/api/repos/:home:egpaadmin:egpa:search_main.prpt/viewer?userid=egpaadmin&password=xs2egpaadmin"  width="700" height="400"></iframe>
-->
<!--
<iframe src="http://192.168.1.100:8643/pentaho/api/repos/:home:egpaadmin:egpa:search_main.prpt/report?userid=egpaadmin&password=xs2egpaadmin&output-target=pageable%2Fpdf&accepted-page=-1&showParameters=true&renderMode=REPORT&htmlProportionalWidth=false#page=1&zoom=auto,-13,612" width="100%" height="700px"></iframe>
-->

