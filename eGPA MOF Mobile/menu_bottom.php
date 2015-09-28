<script>
function goToPageX(pagename)
{
	//alert("appId di form = " + $("#appId").val ());
	//alert("appType di form = " + $("#appType").val ());
	//alert("katPerolehan di form = " + $("#katPerolehan").val ());
	
	window.location.href = pagename + ".php?id=" + $("#appId").val () + "&appType=" + $("#appType").val () +"&katPerolehan="  + $("#katPerolehan").val () + "&X=1";
}

	function clearDownloadMemorandum()
	{
	  $('.backdrop').removeClass("active").removeClass("visible");
      $('.popup-container').remove();
	}
	
	function downloadMemorandum()
	{
		//alert('downloadMemorandum');
		downloadMemoREAL();
	}
		
    function showPopupDownload() {
        $('.backdrop').addClass("active visible");
        $('body').append(
            '<div class="popup-container popup-showing active">' +
                '<div class="popup">' +
                    '<div class="popup-body">' +
                        'Muat turun Memorandum?' +
                    '</div>' +
                    '<div class="popup-buttons">' +
                        '<button class="button ng-binding button-positive" onclick="downloadMemorandum();">YA</button>'+
                        '<button class="button ng-binding button-default" onclick="clearDownloadMemorandum();">TIDAK</button>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }
    
function downloadMemo()
{
	showPopupDownload();
}
function downloadMemoREAL()
{

		
        //var appId = gup ("id");
		//var appType = gup ("appType");
		//var katPerolehan = gup ("katPerolehan");

   		var appId = $("#appId").val ();
		var appType = $("#appType").val ();
		var katPerolehan = $("#katPerolehan").val ();
		
		//$("#appId").val (appId);
		//$("#appType").val (appType);
	  	//$("#katPerolehan").val (katPerolehan);
	  	
	  	
	  	
	  	
	  	var TX = "" + Math.random();
	  	//var url = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
	  	var url = "iframememo.php?p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
	  	var urlreport = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
	  	
	  	
	  	//alert("urlreport====>" + urlreport);
	  	
	  	clearDownloadMemorandum();
	  	window.open (urlreport); 
	  	

}
 
</script>
  	
  	
  	<!--
    <a class="tab-item <?php echo $PROSESTAB ?>" href="kelulusan_proses.php">
        <i class="icon ion-compose"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Proses</span>
    </a>

    <a class="tab-item <?php echo $MEMOTAB ?>" href="kelulusan_memorandum.php?id=<?php echo $_SESSION['MOBILE_appId']; ?>&appType=<?php echo $_SESSION['MOBILE_appType']; ?>&katPerolehan=<?php echo $_SESSION['MOBILE_katPerolehan']; ?>&X=1">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>

    <a class="tab-item <?php echo $MEMOTAB ?>" href="javascript:;" onclick="goToPageX("kelulusan_memorandum");">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>
    <a class="tab-item <?php echo $DOKUMENTAB ?>" href="kelulusan_dokumen.php">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Dokumen</span>
    </a>
    <a class="tab-item <?php echo $LAMPIRANTAB ?>" href="kelulusan_lampiran.php">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Lampiran</span>
    </a>
	-->
    
    
    
    
   
    <a class="tab-item <?php echo $PROSESTAB ?>" style="margin-top: 4px;" href="javascript:;"  onclick="goToPageX('kelulusan_proses');">
        <i class="icon ion-compose"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Proses</span>
    </a>
    <a class="tab-item <?php echo $BUTIRANTAB ?>" style="margin-top: 4px;" href="javascript:;" onclick="goToPageX('kelulusan_butiran');">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Butiran</span>
    </a>
<!--
    <a class="tab-item <?php echo $MEMOTAB ?>" href="javascript:;" onclick="downloadMemo();">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>
    <a class="tab-item <?php echo $MEMOTAB ?>" href="javascript:;" onclick="goToPageX('kelulusan_memorandum');">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>
-->
    <a class="tab-item <?php echo $DOKUMENTAB ?>" style="margin-top: 4px;" href="javascript:;"  onclick="goToPageX('kelulusan_dokumen');">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Dokumen</span>
    </a>
    <a class="tab-item <?php echo $LAMPIRANTAB ?>" style="margin-top: 4px;" href="javascript:;"  onclick="goToPageX('kelulusan_lampiran');">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Lampiran</span>
    </a>
    

      