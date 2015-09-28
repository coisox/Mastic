<?php 
session_start();
//include('../system_prerequisite.php');	
//echo "SESSIOID===" . $_SESSION['userID'];
if($_SESSION['userID'] == "")
{
	//clearkan semua session
	session_destroy();
	header('Location: index.php');	
}
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title></title>

    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
     <link href="ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
              
  </head>

  <body style="-moz-user-select: text;" class="grade-a platform-browser platform-win32 platform-ready" ng-app="starter">
  
   		<script src="js/jquery.js"></script>
 	
 
 	
    	
    <input type=hidden name=appId id=appId value="">
  	<input type=hidden name=appType id=appType value="">
  	<input type=hidden name=katPerolehan id=katPerolehan value="">

    <ion-nav-view nav-view-direction="none" nav-view-transition="ios" class="view-container"><ion-side-menus style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane view" enable-menu-with-back-views="false">





	<ion-side-menu-content class="menu-content pane">


		<ion-nav-bar nav-bar-direction="none" nav-bar-transition="ios" class="bar-stable nav-bar-container">

			<ion-nav-buttons class="hide" side="right"></ion-nav-buttons>

	
		<div nav-bar="active" class="nav-bar-block"><ion-header-bar align-title="left" class="bar-stable bar bar-header disable-user-behavior"><div style="transform: translate3d(0px, 0px, 0px); right: 54px;" class="title title-left header-item"><img src="img/mof_back.svg" onclick="toParent()" height="32"></div><div style="" class="buttons buttons-right header-item"><span class="right-buttons">
				<button style="display: none;" class="button button-icon button-clear ion-help-circled" navmoflegend="" onclick="showLegend()"></button>
				<button class="button button-icon button-clear ion-navicon-round" menu-toggle="right" onclick="toggleMenu()"></button>
			</span></div></ion-header-bar></div>
        <div nav-bar="cached" class="nav-bar-block"><ion-header-bar align-title="left" class="bar-stable bar bar-header disable-user-behavior"><div style="transform: translate3d(-704px, 0px, 0px); right: 95px; opacity: 0;" class="title title-left header-item"><img src="img/mof.svg" height="32"></div><div style="opacity: 0;" class="buttons buttons-right header-item"><span class="right-buttons">
				<button style="display: none;" class="button button-icon button-clear ion-help-circled" navmoflegend="" onclick="showLegend()"></button>
				<button class="button button-icon button-clear ion-navicon-round" menu-toggle="right"></button>
			</span></div></ion-header-bar></div></ion-nav-bar>
		<ion-nav-view nav-view-direction="none" nav-view-transition="ios" class="view-container" name="menuContent"><ion-view style="opacity: 0; transform: translate3d(0%, 0px, 0px);" nav-view="cached" class="pane" view-title="&lt;img src=&quot;img/mof.svg&quot; height=&quot;32&quot;&gt;">

    <img class="ion-ios-search" ng-click="showSearch()" src="img/action_find.svg" width="50">
</ion-view><ion-view style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane">
    <ion-tabs class="tabs-positive tabs-icon-top tabs-bottom tabs-standard"><div class="tab-nav tabs">




<?php 
    $PROSESTAB = " tab-item-active ";
	$BUTIRANTAB =  "";
	$DOKUMENTAB = "";
	$LAMPIRANTAB = "";

include("menu_bottom.php"); 

?>
<!--
    <a class="tab-item tab-item-active" href="kelulusan_proses.php">
        <i class="icon ion-compose"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Proses</span>
    </a>
    <a class="tab-item" href="kelulusan_memorandum.php">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>
    <a class="tab-item" href="kelulusan_dokumen.php">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Dokumen</span>
    </a>
    <a class="tab-item" href="kelulusan_lampiran.php">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Lampiran</span>
    </a>
-->

 


        


    
    </div><ion-nav-view nav-view-direction="none" nav-view-transition="ios" nav-view="active" class="view-container tab-content" name="app-shared_kelulusan-proses"><div style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane"><ion-view class="pane">
    





















 
    <ion-content class="scroll-content ionic-scroll overflow-scroll  has-header has-tabs" overflow-scroll="true"><div class="scroll">

       <!-- <div class="breadcrumb ng-binding">Bekalan &amp; Perkhidmatan Bukan Perunding &gt; Rundingan Terus Agensi &gt; Kelulusan Memorandum</div> -->
        <div class="breadcrumb ng-binding"><span id=tajuk1 name=tajuk1></span> &gt; <span id=tajuk2 name=tajuk2></span> &gt; KELULUSAN MEMORANDUM</div>



<div style="padding-right:1px;padding-left:1px;">
  		 <div class="list">
            <ion-list class="disable-user-behavior">
            	<div class="list">
            	
            	
        <div class="card" style="padding-left:6px;padding-right:6px;">
            <div class="row">
                <div class="col"><b>KATEGORI PEROLEHAN</b><br><span id="kategoriperolehan" name="kategoriperolehan"></span></div>
                <!--<div class="col ng-binding"><span id="kategoriperolehan" name="kategoriperolehan"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>KATEGORI PERMOHONAN</b><br><span id="kategoripermohonan" name="kategoripermohonan"></span></div>
                <!--<div class="col ng-binding"><span id="kategoripermohonan" name="kategoripermohonan"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>NO. PERMOHONAN</b><br><span id="nomborpermohonan" name="nomborpermohonan"></span></div>
                <!--<div class="col ng-binding"><span id="nomborpermohonan" name="nomborpermohonan"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>TARIKH PERMOHONAN</b><br><span id="tarikhpermohonan" name="tarikhpermohonan"></span></div>
                <!--<div class="col ng-binding"><span id="tarikhpermohonan" name="tarikhpermohonan"></span></div>-->
            </div>
        </div>
		
		
		</div>
		</ion-list>
		</div>
</div>










                
        <div class="item item-divider">TINDAKAN SEBELUM</div>
        
<div style="padding-right:1px;padding-left:1px;">
  		 <div class="list">
            <ion-list class="disable-user-behavior">
            	<div class="list">
            	
            	
        <div class="card" style="padding-left:6px;padding-right:6px;">
            <div class="row">
                <div class="col"><b>NAMA PEGAWAI</b><br><span id="PREV_NAMA_PEGAWAI" name="PREV_NAMA_PEGAWAI"></span></div>
                <!--<div class="col ng-binding"><span id="PREV_NAMA_PEGAWAI" name="PREV_NAMA_PEGAWAI"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>TARIKH HANTAR</b><br><span id="TARIKH_HANTAR" name="TARIKH_HANTAR"></span></div>
                <!--<div class="col ng-binding"><span id="TARIKH_HANTAR" name="TARIKH_HANTAR"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>JENIS TINDAKAN</b><br><span id="JENIS_TINDAKAN" name="JENIS_TINDAKAN"></span></div>
                <!--<div class="col ng-binding"><span id="JENIS_TINDAKAN" name="JENIS_TINDAKAN"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>TINDAKAN KEPADA</b><br><span id="TINDAKAN_KEPADA" name="TINDAKAN_KEPADA"></span></div>
                <!--<div class="col ng-binding"><span id="TINDAKAN_KEPADA" name="TINDAKAN_KEPADA"></span></div>-->
            </div>
            <div class="row">
                <div class="col"><b>MINIT PEGAWAI</b><br>
                <span id="MINIT_PEGAWAI" name="MINIT_PEGAWAI"></span></div>
            </div>
        </div>
        
		</div>
		</ion-list>
		</div>
</div>

        
         
        <div class="item item-divider">MAKLUMAT KEPUTUSAN</div>
        


<div style="padding-right:1px;padding-left:1px;">
  		 <div class="list">
            <ion-list class="disable-user-behavior">
            	<div class="list">
            	 <div class="card" style="padding-left:6px;padding-right:6px;">
            	        
        
            <b>TARIKH KEPUTUSAN</b>
            <input kl_virtual_keyboard_secure_input="on" class="standardInput" type="date"  id=keputusanTarikh name=keputusanTarikh>
            <br>
            <b>KEPUTUSAN</b>
            <div>
            	<span id="span_keputusan" name="span_keputusan"></span>
            	<!--
                <select class="standardInput" id=keputusan name=keputusan>
                    <option selected="selected" value="Lulus">LULUS</option>
                    <option value="Tidak Lulus">TIDAK LULUS</option>
                    <option value="Ditangguhkan">DITANGGUHKAN</option>
                </select>
                -->
            </div>
            <br>
            <b>ULASAN</b>
            <div>
                <textarea class="standardInput" rows=10 id=keputusanUlasan name=keputusanUlasan></textarea>
            </div>
            <br>
        </div>
        
		</div>
		</ion-list>
		</div>
</div>

        
        
        <div class="item item-divider">TINDAKAN SETERUSNYA</div>
        
        
        
<div style="padding-right:1px;padding-left:1px;">
  		 <div class="list">
            <ion-list class="disable-user-behavior">
            	<div class="list">
            	 <div class="card" style="padding-left:6px;padding-right:6px;">
            	 
            	 
            <b>JENIS TINDAKAN</b>
            <div>
            	<span id="selectJenisTindakan_span" name="selectJenisTindakan_span"><span>
            	<!--
                <select class="standardInput">
                    <option selected="selected" value="Makluman Keputusan">Makluman Keputusan</option>
                </select>
                -->
            </div>
            <br>
            <b>KEPADA</b>
            <div>
            	<span id="selectKepada_span" name="selectKepada_span"><span>
            	<!--
                <select class="standardInput">
                    <option selected="selected" value=""></option>
                </select>
                -->
            </div>
            <br>
            <b>TARIKH</b>
            <div>
                <span id=tarikhsekarang name=tarikhsekarang></span>
            </div>

            <br>
            <b>MINIT PEGAWAI</b>
            <div>
                <textarea class="standardInput" rows=10  id=minitPegawai name=minitPegawai></textarea>
                <br>
            </div>
        </div>


		</div>
		</ion-list>
		</div>
</div>


        
        <div class="row padding9">
            <div class="col"><button class="button button-block button-positive" onclick="simpanKeputusan();">Simpan</button></div>
            <div class="col"><button class="button button-block button-positive" onclick="simpanKeputusanDanHantar();">Simpan &amp; Hantar</button></div>
        </div>
        
	</div></ion-content>
</ion-view>
</div></ion-nav-view></ion-tabs>

</ion-view></ion-nav-view>
	</ion-side-menu-content>

		
		<?php 
		include("menu_right.php"); 
		?>

	<!--
	<ion-side-menu onclick="toggleMenu()" style="width: 275px;" class="menu menu-right" width="275" is-enabled="true" side="right">
		<ion-header-bar class="bar-stable bar bar-header disable-user-behavior">
			<h1 class="title title-left">&nbsp;</h1>
		</ion-header-bar>
		<ion-content class="mof-menu scroll-content ionic-scroll  has-header"><div style="transform: translate3d(0px, 0px, 0px) scale(1);" class="scroll">
			<ion-list class="disable-user-behavior"><div class="list">
                <ion-item class="accordian item-stable item item-complex"><a href="index.php?logout=true" class="item-content" target="_self">
					Switch User
				</a></ion-item>
                <ion-item class="accordian item-stable item item-complex"><a href="dashboard.php" class="item-content" target="_self">
					Dashboard
				</a></ion-item>
				<ion-item class="accordian item-stable item" onclick="toggleSubMenu(this)">
					Bekalan &amp; Perkhidmatan Bukan Perunding
				</ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Rundingan Terus
                    </a></ion-item>
                <ion-item class="accordian item-stable item" onclick="toggleSubMenu(this)">
					Perkhidmatan Perundingan
				</ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Pengecualian Khas
                    </a></ion-item>
                <ion-item class="accordian item-stable item" onclick="toggleSubMenu(this)">
					Kerja
				</ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Rundingan Terus
                    </a></ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Pengecualian Khas
                    </a></ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Arahan Perubahan Kerja
                    </a></ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Kelulusan Kuantiti Semasa
                    </a></ion-item>
                	<ion-item class="item-accordion item item-complex ng-hide"><a href="empty.php" class="item-content" target="_self">
                    	&gt; Skop Tambahan
                    </a></ion-item>
			</div></ion-list>
		</div><div class="scroll-bar scroll-bar-v"><div style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;" class="scroll-bar-indicator scroll-bar-fade-out"></div></div></ion-content>
	</ion-side-menu>
	
	-->
	
</ion-side-menus></ion-nav-view>

<div class="backdrop"></div>

<script src="js/myscript.js"></script>
<script>
    $(document).ready(function(){
        //var id = (window.location + "").split("id=")[1];
        //alert("proses for id="+id);
        
        
        
        var appId = gup ("id");
		var appType = gup ("appType");
		var katPerolehan = gup ("katPerolehan");

		//alert(appId);
		
		$("#appId").val (appId);
	  	$("#appType").val (appType);
	  	$("#katPerolehan").val (katPerolehan);        
        
        
        		getDownloadMemo(appId);
        getHeader(appId);
        getTindakanSebelum(appId);
        getSelectJenisTindakan();
        getSelectKepada();
        getTarikhSekarang();
        
        getRadioKeputusan();
        //getKeputusan();
       
        
        $('.tab-item').each(function(){
            $(this).attr("href", $(this).attr("href")+"?id="+appId);
        });
    });
    
    
    function getDownloadMemo(appId)
    {
    	
    }

	function downloadMemo()
	{
		showPopupDownload();
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
	    
    function getRadioKeputusan()
    {
    
					var TX = "" + Math.random();
					var url = "service.php?actionid=RadioKeputusan&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  data: {
						  		appId : ""
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
						  
						  		//alert("response===>" + response);
						  		/*
						  		response===>[{"FLC_ID":"100","FLC_NAME":"Lulus<br\/>","FLC_NAME_DESC":"Lulus"},
						  		{"FLC_ID":"101","FLC_NAME":"Tidak Lulus<br\/>","FLC_NAME_DESC":"Tidak Lulus"},
						  		{"FLC_ID":"102","FLC_NAME":"Ditangguhkan<br\/>","FLC_NAME_DESC":"Ditangguhkan"}]
						  		
						  		*/
						  		var jsonobj = $.parseJSON(response);
						  			
						  			//alert(jsonobj.length);
						  			//$("#kategoriperolehan").html (jsonobj[0].KATEGORI_PEROLEHAN_DESC.toUpperCase());
						  		
						    	//set balik dengan data...
						    	//alert(jsonobj.keputusanTarikh);
						    	//$("#keputusanTarikh").val(jsonobj.keputusanTarikh);
						    	//$("#keputusanUlasan").val(jsonobj.keputusanUlasan);
						    	//$("#keputusan").val(jsonobj.keputusan);
						    	//$("#minitPegawai").val(jsonobj.minitPegawai);

								//populate dropsdown...
								
								var x = '<select class="standardInput" id=keputusan name=keputusan>';
								for (var i = 0; i <= jsonobj.length-1 ; i++) {
						            x = x + '<option value="' + jsonobj[i].FLC_ID + '">' + jsonobj[i].FLC_NAME.toUpperCase() + '</option>';
						            }
						        x = x + '</select>';
						            	
						        //alert(x);   	
								$("#span_keputusan").html(x);

								getKeputusan();
							}
						});	        
    
    }
    
    
    function getKeputusan()
    {
    		 var appId = gup ("id");
    		 
					var TX = "" + Math.random();
					var url = "service.php?actionid=getKeputusan&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		appId : appId
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
						  
						  		//alert("response===>" + response);
						  		/*
						  		response===>{"keputusanUlasan":"Ini ulasan saya dari CORRAD","keputusanTarikh":"2015-06-04","KEPUTUSAN":"","userIdApproved":"4",
						  		"minitPegawai":"Ini minit saya dari CORRAD","officerID":"4"}
						  		
						  		*/
						  		var jsonobj = $.parseJSON(response);
						  			
						  			//alert(jsonobj.length);
						  			//$("#kategoriperolehan").html (jsonobj[0].KATEGORI_PEROLEHAN_DESC.toUpperCase());
						  		
						    	//set balik dengan data...
						    	
						    	
						    	//alert("keputusanTarikh===>" + jsonobj.keputusanTarikhX);
						    	$("#keputusanTarikh").val(jsonobj.keputusanTarikhX);
						    	
						    	
						    	$("#keputusanUlasan").val(jsonobj.keputusanUlasanX);
						    	
						    	//alert(jsonobj.keputusanUlasanX);
						    	$("#keputusan").val(jsonobj.keputusanX);
						    	//$("#keputusan").selectmenu('refresh');
						    	
						    	$("#minitPegawai").val(jsonobj.minitPegawaiX);

							}
						});	    
    	

    	
    }
    
    function simpanKeputusanDanHantar()
    {
    	
    
     	 var appId = gup ("id");
    	 var keputusanTarikh = $("#keputusanTarikh").val();
    	 var keputusanUlasan = $("#keputusanUlasan").val();
    	 var keputusan = $("#keputusan").val();
    	 var minitPegawai = $("#minitPegawai").val();
    	 
    	 var nextActionJenisA = $("#nextActionJenisA").val();
    	 var nextActionKpdA = $("#nextActionKpdA").val();
    	 var appTypeFK = $("#appType").val();
    	 
    	 //alert(appId);
    	 //alert(keputusanTarikh);
    	 //alert(keputusanUlasan);
    	 //alert(keputusan);
    	 //alert(minitPegawai);
    	 //alert("nextActionJenisA==" + nextActionJenisA);
    	 //alert("nextActionKpdA==" + nextActionKpdA);
    	 //alert("appTypeFK==" + appTypeFK);
    	 //return false;
    	 
    	 
    	 
    	//HASNOLMIZAM refer BL_B_SAVE_CURR_ACTION_08_0a
					var TX = "" + Math.random();
					var url = "service.php?actionid=simpanDanHantarKelulusan&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		appId : appId,
								keputusanTarikh: keputusanTarikh,
								keputusanUlasan: keputusanUlasan,
								keputusan: keputusan,
								minitPegawai : minitPegawai,
								nextActionJenisA : nextActionJenisA,
								nextActionKpdA : nextActionKpdA,
								appTypeFK : appTypeFK
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response OKKKKK =' + response);
     						  	//alert ("Permohonan telah berjaya disimpan dan dihantar.");
     						  	//window.location.href="dashboard.php";
     						  	showPopupBerjayaDiSimpanDanDiHantar();
     						  	

							}
						});	    

    
    }
    
  
    
    function simpanKeputusan()
    {
    	 var appId = gup ("id");
    	 var keputusanTarikh = $("#keputusanTarikh").val();
    	 var keputusanUlasan = $("#keputusanUlasan").val();
    	 var keputusan = $("#keputusan").val();
    	 var minitPegawai = $("#minitPegawai").val();
    	 
    	 
    	 //alert(appId);
    	 //alert(keputusanTarikh);
    	 //alert(keputusanUlasan);
    	 //alert(keputusan);
    	 //alert(minitPegawai);
    	 
    	 
    	//HASNOLMIZAM refer BL_B_SAVE_CURR_ACTION_08_0a
					var TX = "" + Math.random();
					var url = "service.php?actionid=simpanKeputusan&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		appId : appId,
								keputusanTarikh: keputusanTarikh,
								keputusanUlasan: keputusanUlasan,
								keputusan: keputusan,
								minitPegawai : minitPegawai
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response OKKKKK =' + response);
     						  	//alert ("Permohonan telah berjaya disimpan.");
     						  	//window.location.href="dashboard.php";
     						  	showPopupBerjayaDiSimpan();

							}
						});	    



    }

    function showPopupBerjayaDiSimpan() {
        $('.backdrop').addClass("active visible");
        $('body').append(
            '<div class="popup-container popup-showing active">' +
                '<div class="popup">' +
                    '<div class="popup-body">' +
                        'Permohonan telah berjaya disimpan.' +
                    '</div>' +
                    '<div class="popup-buttons">' +
                        '<button class="button ng-binding button-positive" onclick="closeMe();">OK</button>'+
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }  
    
    function showPopupBerjayaDiSimpanDanDiHantar() {
        $('.backdrop').addClass("active visible");
        $('body').append(
            '<div class="popup-container popup-showing active">' +
                '<div class="popup">' +
                    '<div class="popup-body">' +
                        'Permohonan telah berjaya disimpan dan dihantar.' +
                    '</div>' +
                    '<div class="popup-buttons">' +
                        '<button class="button ng-binding button-positive" onclick="closeMe();">OK</button>'+
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }      
    
    function closeMe()
    {
    	$('.backdrop').removeClass("active").removeClass("visible");
      	$('.popup-container').remove();
      	window.location.href="dashboard.php";
    }
    
    function getHeader(id)
    {
					var TX = "" + Math.random();
					var url = "service.php?actionid=getHeader&appId="+id+"&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		testdata : ""	
								//userid: "" + $('#user_id').val(),
								//userpassword: "" + $('#user_password').val()
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response=' + response);
     						  	

     						  	
     						  	
						  		if (response == "")
						  		{
						  			//ada error..
						  			//$('#modal_error').openModal();
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
						  			[{"APP_ID":"870","PROJECT_ID":"6","PR_NAMA_PROJEK":"PROJEK KEMISKINAN PAHANG","APP_NO":"104901-56-41-04",
						  			"APP_DATE":"10\/02\/2015 04:51 AM","APP_TYPE":"1","APP_TYPE_DESC":"Rundingan Terus Agensi","KATEGORI_PEROLEHAN":"4","KATEGORI_PEROLEHAN_DESC":"Bekalan & Perkhidmatan Bukan Perunding","APP_TITLE":"PROJEK KEMISKINAN PAHANG","APP_STATUS":"99","NO_RUJUKAN_FAIL_AGENSI":"123456","APP_REG_OFFICER":"222","KOD_UNIT":null,"KEMENTERIAN_PEMOHON":"104","AGENSI_PEMOHON":"104901","PTJ":"","KEMENTERIAN_PENGGUNA":"105","AGENSI_PENGGUNA":"105914","KEMENTERIAN_PELAKSANA":"101","AGENSI_PELAKSANA":"101008","KOD_LUAR_NEGARA":"","PUNCA_PERMOHONAN":"006","KETERANGAN_PUNCA_PERMOHONAN":null,"PUNCA_PERMOHONAN_SYARIKAT":null,"PUNCA_PERMOHONAN_AHLI_PARLIMEN":null,"JENIS_PEROLEHAN":"1","PROJECT_BACKGROUND":"&lt;p&gt;t5ty56y56y&lt;\/p&gt;\r\n","IS_PERANCANGAN":"1","IS_PERUNTUKAN":"1","APP_COMMENT":"sila buat semakan\r\n","PEGAWAI_PEMPROSES":"4","PBM_AGENCY":"222","PBM_AGENCY_IS_ONLINE":"1","PBM_AGENCY_STATUS":"200","PBM_AGENCY_ULASAN":"SDSDSD","MEMO_PERTIMBANGAN":"4","MEMO_PERTIMBANGAN_DESC":"MEMO SBPK","APP_ACTION":"1","NO_RUJUKAN_FAIL_BPK":"","APP_PRIORITY":"1","ULASAN_BPK":"&lt;p&gt;erwerwerwer&lt;\/p&gt;\r\n","SYOR_BPK":"&lt;p&gt;werwerwerwffgdgdfg&lt;\/p&gt;\r\n","LATARBELAKANG_BPK":"&lt;p&gt;LATAR BELAKANG PROJEK&lt;\/p&gt;\r\n\r\n&lt;p&gt;t5ty56y56y&lt;\/p&gt;\r\n\r\n&lt;p&gt;1. Mendesak&lt;\/p&gt;\r\n\r\n&lt;p&gt;fgdf&lt;\/p&gt;\r\n\r\n&lt;p&gt;2. Satu Punca (GLC)&lt;\/p&gt;\r\n\r\n&lt;p&gt;fdgdgdfg&lt;\/p&gt;\r\n","APPROVED_DATE":null,"APPROVED_BY":null,"APPROVED_COMMENT":null,"IS_ONLIN
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
						  			
						  			//alert(jsonobj.length);
						  			
						  			$("#kategoriperolehan").html (jsonobj[0].KATEGORI_PEROLEHAN_DESC.toUpperCase());
						  			$("#tajuk1").html (jsonobj[0].KATEGORI_PEROLEHAN_DESC.toUpperCase());
						  			
						  			$("#kategoripermohonan").html (jsonobj[0].APP_TYPE_DESC.toUpperCase());
						  			$("#tajuk2").html (jsonobj[0].APP_TYPE_DESC.toUpperCase());
						  			
						  			$("#nomborpermohonan").html (jsonobj[0].APP_NO.toUpperCase());
						  			$("#tarikhpermohonan").html (jsonobj[0].APP_DATE.toUpperCase());

	     						  	$("#appId").val (jsonobj[0].APP_ID);
	     						  	$("#appType").val (jsonobj[0].APP_TYPE);
	     						  	$("#katPerolehan").val (jsonobj[0].KATEGORI_PEROLEHAN);

						  			
						  		}

							}
						});	    
    }
    
    
    function getTarikhSekarang()
    {
					var TX = "" + Math.random();
					var url = "service.php?actionid=TarikhSekarang&TX=" + TX;
			
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		testdata : ""	
								//userid: "" + $('#user_id').val(),
								//userpassword: "" + $('#user_password').val()
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response=' + response);
						  		if (response == "")
						  		{
						  			//ada error..
						  			//$('#modal_error').openModal();
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
						  			$("#tarikhsekarang").html (jsonobj.TARIKHSEKARANG);
						  		}

							}
						});		    
    }
    
    
    function getTindakanSebelum(appid)
    {
    
   	//alert('masuk sini');
					var TX = "" + Math.random();
					var url = "service.php?actionid=TindakanSebelum&appId="+appid+"&TX=" + TX;
			
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		testdata : ""	
								//userid: "" + $('#user_id').val(),
								//userpassword: "" + $('#user_password').val()
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response=' + response);
						  		if (response == "")
						  		{
						  			//ada error..
						  			//$('#modal_error').openModal();
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
									response={"TINDAKAN_KEPADA":"BAKHRURAZILA BAHAROM","TARIKH_HANTAR":"2015-03-23 12:13:24",
									"JENIS_TINDAKAN":"KELULUSAN MEMORANDUM","PREV_NAMA_PEGAWAI":"BAKHRURAZILA BAHAROM",
									"MINIT_PEGAWAI":"sila luluskan memo","IS_AKUAN_SURAT":null}
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
						  			//alert("IS_AKUAN_SURAT ===>" + jsonobj.IS_AKUAN_SURAT);
						  			
						  			$("#TINDAKAN_KEPADA").html (jsonobj.TINDAKAN_KEPADA);
						  			$("#TARIKH_HANTAR").html (jsonobj.TARIKH_HANTAR);
						  			$("#JENIS_TINDAKAN").html (jsonobj.JENIS_TINDAKAN);
						  			$("#PREV_NAMA_PEGAWAI").html (jsonobj.PREV_NAMA_PEGAWAI);
						  			$("#MINIT_PEGAWAI").html (jsonobj.MINIT_PEGAWAI);
						  			//$("#IS_AKUAN_SURAT").html (jsonobj.IS_AKUAN_SURAT);

						  			
						  			//window.location.href ="dashboard.html";

						  		}

							}
						});		    
    
    }
    
    
    function getSelectJenisTindakan()
    {
    
   					//alert('masuk sini');
					var TX = "" + Math.random();
					var url = "service.php?actionid=SelectJenisTindakan&TX=" + TX;
			
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		testdata : ""	
								//userid: "" + $('#user_id').val(),
								//userpassword: "" + $('#user_password').val()
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response=' + response);
						  		if (response == "")
						  		{
						  			//ada error..
						  			//$('#modal_error').openModal();
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
									response=[{"FLC_ID":"51021","FLC_NAME":"MAKLUMAN KEPUTUSAN"}]
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
						  			
						  			var x = '<select class="standardInput" name="nextActionJenisA" id="nextActionJenisA">';
						  			for (var i = 0; i <= jsonobj.length-1 ; i++) {
						  				x = x + '<option selected="selected" value="' + jsonobj[i].FLC_ID + '">' + jsonobj[i].FLC_NAME + '</option>';
						  			
						  			}
						  			x = x + '</select>';
						  			
						  			$("#selectJenisTindakan_span").html (x);
						  			$("#selectJenisTindakan_span").trigger("create");

						  		}

							}
						});		    
    
    }
    
    
    
    function getSelectKepada()
    {
    
   					//alert('masuk sini');
					var TX = "" + Math.random();
					var url = "service.php?actionid=SelectKepada&TX=" + TX;
			
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		testdata : ""	
								//userid: "" + $('#user_id').val(),
								//userpassword: "" + $('#user_password').val()
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
     						  	//alert('response=' + response);
						  		if (response == "")
						  		{
						  			//ada error..
						  			//$('#modal_error').openModal();
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
									response=[{"FLC_ID":"3,402","FLC_NAME":" ADILAH YAHAYA (PEGAWAI PROSES)"} .....
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
						  			
						  			var x = '<select class="standardInput" name="nextActionKpdA" id="nextActionKpdA">';
						  			for (var i = 0; i <= jsonobj.length-1 ; i++) {
						  				x = x + '<option value="' + jsonobj[i].FLC_ID + '">' + jsonobj[i].FLC_NAME + '</option>';
						  			
						  			}
						  			x = x + '</select>';
						  			
						  			$("#selectKepada_span").html (x);
						  			$("#selectKepada_span").trigger("create");
						  			
						  			
						  			
						  			getDefaultSelectKepada();

						  		}

							}
						});		    
    
    }    
    
    
    function getDefaultSelectKepada()
    {
    		 var appId = gup ("id");
    		 
					var TX = "" + Math.random();
					var url = "service.php?actionid=getDefaultSelectKepada&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		appId : appId
						  		},
						  cache: false,
						  timeout: 30 * 1000,
						  error: function(xhr, textStatus, errorThrown){
     						  	//alert('connection error');
     						  	return false;
    					  },
						  success: function(response){
						  
						  		//alert("response===>" + response);
						  		/*
						  		response===>{"selectKepadaX":"4"}
						  		*/
						  		var jsonobj = $.parseJSON(response);
						  			
					  			//alert(jsonobj.length);
					  			//$("#kategoriperolehan").html (jsonobj[0].KATEGORI_PEROLEHAN_DESC.toUpperCase());
						  		
						    	//set balik dengan data.
						    	
						    	//alert(' set semula kepada 3,' + jsonobj.selectKepadaX);
						    	$("#nextActionKpdA").val(jsonobj.selectKepadaX);
						    	//$("#nextActionKpdA").selectmenu('refresh');

							}
						});	    
    	    
    	
    }
</script>

</body></html>