<?php 
include('../system_prerequisite.php');	


//submit for login
//echo "--------" . $_POST['login'];
//echo "--------" . $error;
if($_POST['login'] && !$error)
{
	//echo "MASUK";
	//echo "" . $_POST['userID'] . "<br>";
	//echo "" . $_POST['userPassword'] . "<br>";
	$error = checklogin($myQuery,$mySQL,$mySession,cleanData($_POST['userID']),md5($_POST['userPassword']));
	//echo "ERROR SELEPAS MASUK--------" . $error;


	
}//eof if

if($_SESSION['userID'])
	{
	//echo "USER--->" . $_SESSION['userID'];
	//header('Location: index.php?'.$_SERVER['QUERY_STRING']);
	//header('Location: index.php');
	header('Location: dashboard.php');	
	}
else
	{
	include("login_custom.php");			
	}
?>
