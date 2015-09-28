<?php 
session_start();
//include('../system_prerequisite.php');	
//echo "SESSIOID===" . $_SESSION['userID'];
if($_SESSION['userID'] == "")
{
	//clearkan semua session
	session_destroy();
	header('Location: index.php');	
	//echo "NAK PI MANA????";
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

    <script src="js/jquery.js"></script>
    
  </head>

  <body style="-moz-user-select: text;" class="grade-a platform-browser platform-win32 platform-ready" ng-app="starter">
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
    $PROSESTAB = "";
	$BUTIRANTAB =  "";
	$DOKUMENTAB =  " tab-item-active ";
	$LAMPIRANTAB = "";




include("menu_bottom.php"); 

?>
<!--
    <a class="tab-item" href="kelulusan_proses.php">
        <i class="icon ion-compose"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Proses</span>
    </a>
    <a class="tab-item" href="kelulusan_memorandum.php">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>
    <a class="tab-item tab-item-active" href="kelulusan_lampiran.php">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Lampiran</span>
    </a>
-->
    
    </div><ion-nav-view nav-view-direction="none" nav-view-transition="ios" nav-view="active" class="view-container tab-content" name="app-shared_kelulusan-proses"><div style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane"><ion-view class="pane">
    
    <ion-content class="scroll-content ionic-scroll overflow-scroll  has-header has-tabs" overflow-scroll="true"><div class="scroll">
        <div class="breadcrumb ng-binding">Bekalan &amp; Perkhidmatan Bukan Perunding &gt; Rundingan Terus Agensi &gt; Dokumen Berkaitan</div>
        <div class="paddingContent">
        	<span id="senaraidokumen" name=senaraidokumen></span>
        	<!--
        	<div class="row">
            	<div class="col col-50">
            		<img src="img/MS_Word.svg" class="ms_icon"><br>
            		<b>MUAT TURUN</b><br>
            		<b>MUAT NAIK OLEH</b><br>
            		XXXXXXXXXXXX<br><br>
            		<b>TARIKH MUAT NAIK</b><br>
            		XXXXXXXXXXXX<br><br>
            	</div>
            	<div class="col align_ms_icon">
            		<b>KETERANGAN</b><br>
            		XXXXXXXXXXXX<br><br>
            		<b>NAMA FAIL</b><br>
            		XXXXXXXXXXXX<br><br>
            		</div>
            </div>
            <div class="row">
            	<div class="col col-100"><hr noshade size=2></div>
            </div>            
			-->
	
			<!--
            <div class="row">
            	<div class="col col-20"><img src="img/MS_Excel.svg" class="ms_icon"></div>
            	<div class="col align_ms_icon">kalo_detect_ms_excel.xls<br>13.3KB</div>
            </div>
            <div class="row">
            	<div class="col col-20"><img src="img/MS_PowerPoint.svg" class="ms_icon"></div>
            	<div class="col align_ms_icon">kalo_detect_ms_powerpoint.ppt<br>13.3KB</div>
            </div>
            -->
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
        //alert("lampiran for id="+id);
        
        
        var appId = gup ("id");
		var appType = gup ("appType");
		var katPerolehan = gup ("katPerolehan");

		$("#appId").val (appId);
	  	$("#appType").val (appType);
	  	$("#katPerolehan").val (katPerolehan);        
        
        getListDokumenBerkaitan(appId);
        
        $('.tab-item').each(function(){
            $(this).attr("href", $(this).attr("href")+"?id="+appId);
        });
    });
    
    function toggleGroup(e) {
    

    
    	var currentstatus = "notactive";
    	if($(e).hasClass("active")) {
            currentstatus = "active";
        }
        
        $('ion-content .active').removeClass("active").next().addClass("ng-hide");
        
        if(currentstatus == "active") {
            $(e).removeClass("active").next().addClass("ng-hide");
        }
        else {
            $(e).addClass("active").next().removeClass("ng-hide");
        }

        
        //if($(e).hasClass("active")) {
        //    $(e).removeClass("active").next().addClass("ng-hide");
        //}
        //else {
        //    $(e).addClass("active").next().removeClass("ng-hide");
        //}
    }
        
    function getListDokumenBerkaitan(appid)
    {
    
					var TX = "" + Math.random();
					var url = "service.php?actionid=ListDokumenBerkaitan&appId="+appid+"&TX=" + TX;
			
			
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
     						  	//alert('getListDokumenBerkaitan response=' + response);
						  		if (response == "")
						  		{
						  			//ada error..
						  			//$('#modal_error').openModal();
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
						  			 response=[{"KETERANGAN":"Salinan kelulusan keputusan JPICT dan JTICT (jika berkaitan perolehan ICT)","NAMAFAIL":"test.txt",
						  			 "MUATNAIKOLEH":"UAT KEMENTERIAN PENGANGKUTAN","TARIKHMUATNAIK":"10\/02\/2015 09:52 AM",
						  			 "MUATTURUN":"<a href=\"..\/custom\/download.php?id=137\">MUAT TURUN<\/a>"}
						  			
						  			
						  			SELECT K.DESCRIPTION as 'KETERANGAN', 
										a.Filename as 'NAMAFAIL',b.NAME as 'MUATNAIKOLEH', 
										DATE_FORMAT(a.DATE_CREATED, '%d/%m/%Y %h:%i %p') as 'TARIKHMUATNAIK',
										CONCAT('<a href="../custom/download.php?id=',a.ID,'">MUAT TURUN</a>') as MUATTURUN
										FROM   egpa_usr.DOCUMENT_MGMT a
													INNER JOIN egpa_usr.KEYWORD K ON K.ID = a.DOCTYPE
													INNER JOIN egpa_corrad.PRUSER b ON b.USERID =  a.CREATED_BY
													INNER JOIN egpa_corrad.FLC_USER_GROUP_MAPPING GM ON GM.USER_ID = b.USERID
													INNER JOIN egpa_corrad.FLC_USER_GROUP G ON G.GROUP_ID = GM.GROUP_ID	
										WHERE 
										G.GROUP_TYPE = 3 	
										AND a.REF_ID = '870'
										GROUP BY a.ID
										
										response=[{"KETERANGAN":"Salinan kelulusan keputusan JPICT dan JTICT (jika berkaitan perolehan ICT)",
										"NAMAFAIL":"test.txt","MUATNAIKOLEH":"UAT KEMENTERIAN PENGANGKUTAN","TARIKHMUATNAIK":"10\/02\/2015 09:52 AM",
										"MUATTURUN":"<a href=\"..\/custom\/download.php?id=137\">MUAT TURUN<\/a>"},{"KETERANGAN":"Salinan Surat Penilaian Jabatan Perkhidmatan & Penilaian Harta JPPH (terkini)","NAMAFAIL":"test.txt","MUATNAIKOLEH":"UAT KEMENTERIAN PENGANGKUTAN","TARIKHMUATNAIK":"10\/02\/2015 10:05 AM","MUATTURUN":"<a href=\"..\/custom\/download.php?id=138\">MUAT TURUN<\/a>"},{"KETERANGAN":"Dokumen Maklumat Peruntukan","NAMAFAIL":"test.txt","MUATNAIKOLEH":"UAT KEMENTERIAN PENGANGKUTAN","TARIKHMUATNAIK":"10\/02\/2015 10:07 AM","MUATTURUN":"<a href=\"..\/custom\/download.php?id=139\">MUAT TURUN<\/a>"},{"KETERANGAN":"Slip Tandatangan Pegawai Pengawal","NAMAFAIL":"test.txt","MUATNAIKOLEH":"UAT KEMENTERIAN PENGANGKUTAN","TARIKHMUATNAIK":"03\/03\/2015 02:01 PM","MUATTURUN":"<a href=\"..\/custom\/download.php?id=842\">MUAT TURUN<\/a>"}]
										
						  			
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
									
									var x = '';
									var x1 = '';
									var x2 = '';
										
										 
						  			for (var i = 0; i <= jsonobj.length-1 ; i++) {
						  				
						  				x1 = x1 + '<div class="row card">'+
						  							'<div class="col col-50">'+
									            		'<font size=10px>' + (i+1) + '&nbsp;</font><img src="img/MS_Word.svg" class="ms_icon"><br>'+
									            		'<b>' + jsonobj[i].MUATTURUN + '</b><br><br>'+
									            		'<b>MUAT NAIK OLEH</b><br>'+
									            		jsonobj[i].MUATNAIKOLEH + '<br><br>'+
									            		'<b>TARIKH MUAT NAIK</b><br>'+
									            		jsonobj[i].TARIKHMUATNAIK + '<br><br>'+
									            	'</div>'+
									            	'<div class="col align_ms_icon">'+
									            		'<b>KETERANGAN</b><br>'+
									            		jsonobj[i].KETERANGAN + '<br><br>'+
									            		'<b>NAMA FAIL</b><br>'+
									            		jsonobj[i].NAMAFAIL + '<br><br>'+
									            	'</div>' +

									            '</div>';
									            
									     x2 = x2 + '<div class="card">'+
									     			'<div class="row">'+
									     			'<div class="list list-inset">'+ jsonobj[i].KETERANGAN.toUpperCase() + 
									     			'</div></div>'+
						  							'<div class="row"><div class="col col-50">'+
									            		//'<font size=10px>' + (i+1) + '&nbsp;</font><img src="img/MS_Word.svg" class="ms_icon"><br>'+
									            		//'<b>' + jsonobj[i].MUATTURUNBUTTON + '</b><br><br>'+
									            		'<b>MUAT NAIK OLEH</b><br>'+
									            		jsonobj[i].MUATNAIKOLEH + '<br><br>'+
									            		'<b>TARIKH MUAT NAIK</b><br>'+
									            		jsonobj[i].TARIKHMUATNAIK + '<br><br>'+
									            	'</div>'+
									            	'<div class="col align_ms_icon">'+
									            		//'<b>KETERANGAN</b><br>'+
									            		//jsonobj[i].KETERANGAN + '<br><br>'+
									            		'<b>NAMA FAIL</b><br>'+
									            		jsonobj[i].NAMAFAIL + '<br><br>'+
									            	'</div></div>' +
									     			'<div class="row">'+
									     			'<b>' + jsonobj[i].MUATTURUNBUTTON + '</b>'+
									     			'</div>'+
									            '</div>';
									                   


							                 x = x + '<div class="card">'+
							                 	'<div class="collapsible">' +
							                    '<ion-item class="accordian item-stable item" onclick="toggleGroup(this)">'+
							                    	'<div class="item item-icon-left" >'+
							                    		'<i class="icon"><font size=10>' + (i+1) + '</font></i>' +
													    '<br><p>' + jsonobj[i].KETERANGAN.toUpperCase() + '</p>'+
													    //'<span class="badge badge-assertive" style="margin-top: -10px; margin-right: -30px;">' +  jsonobj[i].MUATTURUNBUTTON + '</span>'+
													'</div>'+
						                            '<div class="col"><b>'+
						                            	 jsonobj[i].MUATTURUNBUTTON + 
						                            '</b></div>'+
							                    '</ion-item>'+
							                  
							                    '<ion-item class="item-accordion no-animation item ng-hide">'+
							                    	'<div class="row">'+
							                            '<div class="col"><b>DIMUAT NAIK OLEH</b><br>' + jsonobj[i].MUATNAIKOLEH + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>TARIKH MUAT NAIK</b><br>' + jsonobj[i].TARIKHMUATNAIK + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>NAMA FAIL</b><br>' + jsonobj[i].NAMAFAIL  + '</div>'+
							                        '</div>'+
						                            //'<div class="col">'+
						                            //	 +  jsonobj[i].MUATTURUNBUTTON + 
						                            //	'<button class="button button-block button-positive" onclick="openKelulusan(' + jsonobj[i].APP_ID + ')">Proses</button>'+
						                            //'</div>'+
							   					'</ion-item>'+
							                  '</div>' +
							                '</div>';
							                
							                
							                						  			
						  				//x = x + '<div class="row">' +
									    //        	'<div class="col col-100"><hr noshade size=2></div>' +
									    //        '</div>';
						  			}
						  			
						  			$("#senaraidokumen").html (x);
						  		}

							}
						});	    	
    }
    
    
</script>

</body></html>