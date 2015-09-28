<?php 
session_start();
//echo "SESSIOID===" . $_SESSION['userID'];
if($_SESSION['userID'] == "")
{
	//clearkan semua session
	session_destroy();
	header('Location: index.php');	
	//echo "NAK PI MANA????";
}
//var url = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2
//egpaadmin&p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
$p_app_id =  $_REQUEST['p_app_id'];
$p_app_type =  $_REQUEST['p_app_type'];
$p_kat_perolehan =  $_REQUEST['p_kat_perolehan'];
$random = $_REQUEST['random'];
?>
<script src="js/jquery.js"></script>
<script src="js/pdfobject.js"></script>
<body onload="onloaddata();">
<iframe name="iframememo_in" id="iframememo_in" height="700px" width="100%"></iframe>
<script type="text/javascript">
	function gup( name )
	{
		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");  
		var regexS = "[\\?&]"+name+"=([^&#]*)";  
		var regex = new RegExp( regexS );  
		var results = regex.exec( window.location.href ); 
		if( results == null )    return "";  
		else    return results[1];
		
	}
	
    //window.onload = function (){
	function onloaddata() {
        var appId = gup ("p_app_id");
		var appType = gup ("p_app_type");
		var katPerolehan = gup ("p_kat_perolehan");
		var random = gup ("random");
				
      	//var myurl = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=<?php echo $p_app_id ?>&p_app_type=<?php echo $p_app_type ?>&p_kat_perolehan=<?php echo $p_kat_perolehan ?>&random=<?php echo $random ?>";
      	//var myurl = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=<?php echo $random ?>";
      	var myurl = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=870&p_app_type=1&p_kat_perolehan=4&random=";
      	
      	//alert (myurl);
        //var success = new PDFObject({ url: myurl }).embed();
        
        $('#iframememo_in').attr('src', myurl);
        $("#iframememo_in").trigger("create");
        //alert("inject DI DALAM onloaddata... " + myurl);

    }
    //};
</script>


</body>
