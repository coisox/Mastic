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

	<!--
	<link rel="stylesheet" href="materialize/css/materialize.css">
    -->          
  </head>

    <script>
    	var currentSearchText = "";
    </script>	
	
  <body onload="getSenaraiTindakan('');" style="-moz-user-select: text;" class="grade-a platform-browser platform-win32 platform-ready" ng-app="starter">
    
    <script src="js/jquery.js"></script>
  	<!--
  	<script src="materialize/js/materialize.min.js"></script>
	-->

    <span id=response name=response></span>
    
    <ion-nav-view nav-view-direction="none" nav-view-transition="ios" class="view-container"><ion-side-menus style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane view" enable-menu-with-back-views="false">
	<ion-side-menu-content class="menu-content pane">
		<ion-nav-bar nav-bar-direction="none" nav-bar-transition="ios" class="bar-stable nav-bar-container">

			<ion-nav-buttons class="hide" side="right"></ion-nav-buttons>

            <div nav-bar="cached" class="nav-bar-block"><ion-header-bar align-title="left" class="bar-stable bar bar-header disable-user-behavior"><div class="title title-left header-item"></div><div class="buttons buttons-right header-item"><span class="right-buttons">
                    <button class="button button-icon button-clear ion-help-circled" navmoflegend="" onclick="showLegend()"></button>
                    <button class="button button-icon button-clear ion-navicon-round" menu-toggle="right"></button>
                </span></div></ion-header-bar></div>
            <div nav-bar="active" class="nav-bar-block"><ion-header-bar align-title="left" class="bar-stable bar bar-header disable-user-behavior"><div style="transform: translate3d(0px, 0px, 0px); right: 95px;" class="title title-left header-item"><img src="img/mof.svg" height="32"></div><div style="" class="buttons buttons-right header-item"><span class="right-buttons">
                    <button class="button button-icon button-clear ion-help-circled" navmoflegend="" onclick="showLegend()"></button>
                    <button class="button button-icon button-clear ion-navicon-round" menu-toggle="right" onclick="toggleMenu()"></button>
                </span></div></ion-header-bar></div>
        </ion-nav-bar>
		<ion-nav-view nav-view-direction="none" nav-view-transition="ios" class="view-container" name="menuContent"><ion-view style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane" view-title="&lt;img src=&quot;img/mof.svg&quot; height=&quot;32&quot;&gt;">

	<ion-content class="scroll-content ionic-scroll overflow-scroll  has-header" overflow-scroll="true"><div class="scroll">
       <div class="breadcrumb">Laman Utama &gt; Dashboard</div>
       <div class="item item-divider">Senarai Tindakan Pengguna BPK</div>
       <div class="list">
            <ion-list class="disable-user-behavior">
            	<div class="list">

            	<span id="getSenaraiTindakan_DATA" name="getSenaraiTindakan_DATA"></span>
            	
            	<!--
                <div class="">
                    <ion-item class="accordian item-stable item" onclick="toggleGroup(this)">
                    	<div class="row">
                            <div class="col listTitle ng-binding" arahantindakan="SEGERA"><i class="icon ion-flag"></i> Segera</div>
                        </div>
                        <div class="row">
                            <div class="col"><b>Tarikh Hantar</b></div>
                            <div class="col ng-binding">16/02/2015 03:42:08 PM</div>
                        </div>
                        <div class="row">
                            <div class="col"><b>Tajuk Permohonan</b></div>
                            <div class="col ng-binding">Projek Kemiskinan Terengganu</div>
                        </div>
                    </ion-item>
                    
                    <ion-item class="item-accordion no-animation item ng-hide">
                    	<div class="row">
                            <div class="col"><b>Tempoh Proses</b></div>
                            <div class="col ng-binding"></div>
                        </div>
                        <div class="row">
                            <div class="col"><b>Kategori Permohonan</b></div>
                            <div class="col ng-binding">Rundingan Terus Agensi</div>
                        </div>
                        <div class="row">
                            <div class="col"><b>Kementerian Pemohon</b></div>
                            <div class="col ng-binding">Jabatan Perdana Menteri</div>
                        </div>
                        <div class="row">
                            <div class="col"><b>Agensi Pemohon</b></div>
                            <div class="col ng-binding">Agensi Penuatkuasaan Marintim Malaysia</div>
                        </div>
                        
                        <div class="row">
                            <div class="col"><b>Kategori Perolehan</b></div>
                            <div class="col ng-binding">Bekalan &amp; Perkhidmatan Bukan Perunding</div>
                        </div>
                        <div class="row">
                            <div class="col"><b>Status</b></div>
                            <div class="col ng-binding">Kelulusan Memorandum</div>
                        </div>
                        <div class="row">
                            <div class="col">
                            	<button class="button button-block button-positive" onclick="openKelulusan(123)">Proses</button>
                            </div>
                        </div>
                    </ion-item>
                </div>
                -->
	
            </div></ion-list>
        </div>
        
	</div></ion-content>

    <img class="ion-ios-search" onclick="showSearch(currentSearchText)" src="img/action_find.svg" width="50">
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
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
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

    function showSearch(currentSearchText) {
        $('.backdrop').addClass("active visible");
        $('body').append(
            '<div class="popup-container popup-showing active">' +
                '<div class="popup">' +
                    '<div class="popup-body">' +
                        '<input value="' + currentSearchText + '" type="text" style="padding-left:10px;" placeholder="Kata carian.." autofocus="true" class="ng-pristine ng-valid ng-touched" id=searchtext name=searchtext>' +
                    '</div>' +
                    '<div class="popup-buttons">' +
                        '<button class="button ng-binding button-positive" onclick="performSearch();">CARI</button><button class="button ng-binding button-default" onclick="clearSearch()">BATAL</button>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }


	function performSearchCheck()
	{
        $('#searchText').keyup(function(e) {
            if (e.which==13) {
               performSearch();
            }
            
        });
	
	}
	
	
    function performSearch() {
    	
	        //do ur filter here
	        
	        var searchText = $('#searchtext').val();
			currentSearchText = searchText;
			
	        $('.backdrop').removeClass("active").removeClass("visible");
	        $('.popup-container').remove();
	
	
	        getSenaraiTindakan(searchText);
	        

			//$('.collapsible li').each(function() {
			//$('.collapsible ion-item').each(function() {
            //    alert('hai');
            //    
            //    $(this).show();
            //    if($(this).text().toLowerCase().indexOf($.trim($('#searchtext').val().toLowerCase()))<0) $(this).hide();
            //});

                                
    }

    function clearSearch() {
        //reset ur filter here
        
        $('.backdrop').removeClass("active").removeClass("visible");
        $('.popup-container').remove();
        currentSearchText = "";
        getSenaraiTindakan("");
    }

    function openKelulusan(id) {
        window.location = "kelulusan_proses.php?id="+id;

    }
    
    
    function getSenaraiTindakan(searchText)
    {
    
    	//alert('masuk sini');
					var TX = "" + Math.random();
					var url = "service.php?actionid=getSenaraiTindakan&TX=" + TX;
			
						$.ajax({
						  type: "POST",
						  url: url,
						  //dataType: "JSON",
						  data: {
						  		searchText : ""	+ searchText
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
     						  	//$("#response").html (response);
     						  	
						  		if (response == "null" || response == "")
						  		{
						  			//alert('tak de data');
						  			//ada error..
						  			//$('#modal_error').openModal();
						  			
						  			
									var datax = '<div class="collapsible">' +
					                    '<ion-item class="accordian item-stable item">'+
					                    	'<div class="row" style="top-margin:10px;">' +
					                            '<div class="col listTitle ng-binding"><i class="icon ion-flag"></i> TIADA REKOD </div>'+
					                        '</div>'+
					                    '</ion-item>'+
					                '</div>';

					            	$("#getSenaraiTindakan_DATA").html (datax);
					            	$("#getSenaraiTindakan_DATA").trigger("create");
					            							  			
						  		}
						  		else
						  		{
						  			//cara baca..
						  			
						  			/*
									response=  response=[{"APP_ID":"870","ARAHAN_TINDAKAN":"<font color=#FF0000><b>SERTA MERTA<\/b><\/font>",
									"TEMPOH":null,"KATEGORI_PERMOHONAN":"RUNDINGAN TERUS AGENSI","KEMENTERIAN_PEMOHON":"KEMENTERIAN PENGANGKUTAN",
									"AGENSI_PEMOHON":"BAHAGIAN PEMBANGUNAN","TAJUK_PERMOHONAN":"PROJEK KEMISKINAN PAHANG",
									"KAT_PEROLEHAN":"BEKALAN & PERKHIDMATAN BUKAN PERUNDING","DATE_SUBMIT":"25\/03\/2015 04:19:59 PM",
									"STATUS":"KELULUSAN MEMORANDUM",
									"TINDAKAN":"<a href='index.php?page=page_wrapper&appId=870&menuID=687'><image src=img\/egpa\/btn_proses.png><\/a>"},
									
									{"APP_ID":"1173","ARAHAN_TINDAKAN":"<font color=#FF69B4><b>SEGERA<\/b><\/font>","TEMPOH":null,"KATEGORI_PERMOHONAN":"RUNDINGAN TERUS AGENSI","KEMENTERIAN_PEMOHON":"KEMENTERIAN PENGANGKUTAN","AGENSI_PEMOHON":"BAHAGIAN PEMBANGUNAN","TAJUK_PERMOHONAN":"PROJEK KEMISKINAN KELANTAN","KAT_PEROLEHAN":"BEKALAN & PERKHIDMATAN BUKAN PERUNDING","DATE_SUBMIT":"05\/03\/2015 10:44:41 AM","STATUS":"KELULUSAN MEMORANDUM","TINDAKAN":"<a href='index.php?page=page_wrapper&appId=1173&menuID=687'><image src=img\/egpa\/btn_proses.png><\/a>"},{"APP_ID":"1163","ARAHAN_TINDAKAN":"<font color=#FF0000><b>SERTA MERTA<\/b><\/font>","TEMPOH":null,"KATEGORI_PERMOHONAN":"SKOP TAMBAHAN","KEMENTERIAN_PEMOHON":"KEMENTERIAN PERTAHANAN","AGENSI_PEMOHON":"KEMENTERIAN PERTAHANAN MALAYSIA","TAJUK_PERMOHONAN":"PROJEK KEMISKINAN TERENGGANU TEST YATT","KAT_PEROLEHAN":"KERJA","DATE_SUBMIT":"01\/03\/2015 04:12:37 PM","STATUS":"PERAKUAN MEMORANDUM","TINDAKAN":"<a href='index.php?page=page_wrapper&appId=1163&menuID=334'><image src=img\/egpa\/btn_proses.png><\/a>"},{"APP_ID":"611","ARAHAN_TINDAKAN":"<font color=#FF0000><b>SERTA MERTA<\/b><\/font>","TEMPOH":null,"KATEGORI_PERMOHONAN":"RUNDINGAN TERUS AGENSI","KEMENTERIAN_PEMOHON":"KEMENTERIAN PERTANIAN DAN INDUSTRI ASAS TANI","AGENSI_PEMOHON":"AGRO BANK (BANK PERTANIAN MALAYSIA)","TAJUK_PERMOHONAN":"KAJIAN-KAJIAN KEMUNGKINAN DI UNIT PERANCANG EKONOMI (UPE)","KAT_PEROLEHAN":"BEKALAN & PERKHIDMATAN BUKAN PERUNDING","DATE_SUBMIT":"27\/01\/2015 04:02:39 PM","STATUS":"PERAKUAN MEMORANDUM","TINDAKAN":"<a href='index.php?page=page_wrapper&appId=611&menuID=334'><image src=img\/egpa\/btn_proses.png><\/a>"},{"APP_ID":"368","ARAHAN_TINDAKAN":"<font color=#FF69B4><b>SEGERA<\/b><\/font>","TEMPOH":null,"KATEGORI_PERMOHONAN":"KELULUSAN KUANTITI SEMENTARA","KEMENTERIAN_PEMOHON":"KEMENTERIAN PENGANGKUTAN","AGENSI_PEMOHON":"BAHAGIAN PEMBANGUNAN","TAJUK_PERMOHONAN":"PENGURUSAN BANJIR DI KELANTAN OLEH: INSTITUT LATIHAN PENGURUSAN BENCANA NEGARA (ILPBN) ","KAT_PEROLEHAN":"KERJA","DATE_SUBMIT":"06\/01\/2015 04:07:01 PM","STATUS":"KELULUSAN MEMORANDUM","TINDAKAN":"<a href='index.php?page=page_wrapper&appId=368&menuID=687'><image src=img\/egpa\/btn_proses.png><\/a>"}]
						  			*/
						  			
						  			var jsonobj = $.parseJSON(response);
						  			//alert(jsonobj.passwd);
						  			//alert(jsonobj.username);
						  			//window.location.href ="dashboard.html";


								

										var datax_old = '';
										var datax_z = "";
										var datax = '';
										var TEMPOH = "";
										for (var i = 0; i <= jsonobj.length-1 ; i++) {
										
											if (jsonobj[i].TEMPOH == null)
											{
												TEMPOH = "";
											}
											else
											{
												TEMPOH = jsonobj[i].TEMPOH;
											}
										
											datax_old = datax_old + '<div class="collapsible">' +
							                    '<ion-item class="accordian item-stable item" onclick="toggleGroup(this)">'+
							                    	'<div class="row" style="top-margin:10px;">' +
							                    		'<font size=10>' + (i+1) + '.</font>'+ 
							                            '<div class="col listTitle ng-binding" arahantindakan="' + jsonobj[i].ARAHAN_TINDAKAN + '"><i class="icon ion-flag"></i> ' + jsonobj[i].ARAHAN_TINDAKAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Tarikh Hantar</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].DATE_SUBMIT + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Tajuk Permohonan</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].TAJUK_PERMOHONAN + '</div>'+
							                        '</div>'+
							                    '</ion-item>'+
							                    
							                    '<ion-item class="item-accordion no-animation item ng-hide">'+
							                    	'<div class="row">'+
							                            '<div class="col"><b>Tempoh Proses</b></div>'+
							                            '<div class="col ng-binding">' + TEMPOH + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Kategori Permohonan</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].KATEGORI_PERMOHONAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Kementerian Pemohon</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].KEMENTERIAN_PEMOHON + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Agensi Pemohon</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].AGENSI_PEMOHON + '</div>'+
							                        '</div>'+
							                        
							                        '<div class="row">'+
							                            '<div class="col"><b>Kategori Perolehan</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].KAT_PEROLEHAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Status</b></div>'+
							                            '<div class="col ng-binding">' + jsonobj[i].STATUS + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col">'+
							                            	'<button class="button button-block button-positive" onclick="openKelulusan(' + jsonobj[i].APP_ID + ')">Proses</button>'+
							                            '</div>'+
							                       '</div>'+
							                    '</ion-item>'+
							                '</div>';
							                
							          
							                datax_z = datax_z + '<div class="collapsible">' +
							                    '<ion-item class="accordian item-stable item" onclick="toggleGroup(this)">'+
							                    	'<div class="row" style="top-margin:10px;">' +
							                    		'<font size=5>' + (i+1) + '.</font>'+ 
							                            '<div class="col listTitle ng-binding" arahantindakan="' + jsonobj[i].ARAHAN_TINDAKAN + '"><i class="icon ion-flag"></i> ' + jsonobj[i].ARAHAN_TINDAKAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Tarikh Hantar</b><br>' + jsonobj[i].DATE_SUBMIT + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Tajuk Permohonan</b><br>' + jsonobj[i].TAJUK_PERMOHONAN + '</div>'+
							                        '</div>'+
							                    '</ion-item>'+
							                    
							                    '<ion-item class="item-accordion no-animation item ng-hide">'+
							                    	'<div class="row">'+
							                            '<div class="col"><b>Tempoh Proses</b><br>' + TEMPOH + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Kategori Permohonan</b><br>' + jsonobj[i].KATEGORI_PERMOHONAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Kementerian Pemohon</b><br>' + jsonobj[i].KEMENTERIAN_PEMOHON + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Agensi Pemohon</b><br>' + jsonobj[i].AGENSI_PEMOHON + '</div>'+
							                        '</div>'+
							                        
							                        '<div class="row">'+
							                            '<div class="col"><b>Kategori Perolehan</b><br>' + jsonobj[i].KAT_PEROLEHAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Status</b><br>' + jsonobj[i].STATUS + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col">'+
							                            	'<button class="button button-block button-positive" onclick="openKelulusan(' + jsonobj[i].APP_ID + ')">Proses</button>'+
							                            '</div>'+
							                       '</div>'+
							                    '</ion-item>'+
							                '</div>';
							                
							                  

							                 datax = datax + '<div class="card">'+
							                 	'<div class="collapsible">' +
							                    '<ion-item class="accordian item-stable item" onclick="toggleGroup(this)">'+
							                    	
 													
  							                    	
							                    	'<div class="item item-icon-left">'+
							                    		//TEMPOH + 
							                    		'<i class="icon"  style="background-color:'+ jsonobj[i].TEMPOHWARNA +'">&nbsp;<font size=10>' + (i+1) + '</font>&nbsp;</i>' +
							                    		//'<h2><font size=10>' + (i+1) + '.</font></h2>'+
													    
													     jsonobj[i].ARAHAN_TINDAKAN +
													    '<br><p>' + jsonobj[i].TAJUK_PERMOHONAN + '</p>'+
													    '<span class="badge badge-assertive" style="background-color:#00b4c9;margin-top: -10px; margin-right: -30px;">' + jsonobj[i].DATE_SUBMIT + '</span>'+
													    //'<span class="badge badge-assertive" style="margin-top: 20px; margin-right: -30px;">' + TEMPOH + '</span>'+
													    //'<br><span class="badge badge-assertive" style="margin-top: 20px; margin-right: -30px;">' + jsonobj[i].ARAHAN_TINDAKAN + '</span>'+
													'</div>'+
							                    	//'<div class="row" style="top-margin:10px;">' +
							                    	//	'<font size=5>' + (i+1) + '.</font>'+ 
							                        //    '<div class="col listTitle ng-binding" arahantindakan="' + jsonobj[i].ARAHAN_TINDAKAN + '"><i class="icon ion-flag"></i> ' + jsonobj[i].ARAHAN_TINDAKAN + '</div>'+
							                        //'</div>'+
							                        //'<div class="row">'+
							                        //    '<div class="col"><b>Tarikh Hantar</b><br>' + jsonobj[i].DATE_SUBMIT + '</div>'+
							                        //'</div>'+
							                        //'<div class="row">'+
							                        //    '<div class="col"><b>Tajuk Permohonan</b><br>' + jsonobj[i].TAJUK_PERMOHONAN + '</div>'+
							                        //'</div>'+
							                    '</ion-item>'+
							                  
							                    '<ion-item class="item-accordion no-animation item ng-hide">'+
							                    	//'<div class="row">'+
							                        //    '<div class="col"><b>Tempoh Proses</b><br>' + TEMPOH + '</div>'+
							                        //'</div>'+
							                        //'<div class="row">'+
							                        //    '<div class="col"><b>Arahan Tindakan</b><br>' + jsonobj[i].ARAHAN_TINDAKAN + '</div>'+
							                        //'</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Kategori Permohonan</b><br>' + jsonobj[i].KATEGORI_PERMOHONAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Kementerian Pemohon</b><br>' + jsonobj[i].KEMENTERIAN_PEMOHON + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Agensi Pemohon</b><br>' + jsonobj[i].AGENSI_PEMOHON + '</div>'+
							                        '</div>'+
							                        
							                        '<div class="row">'+
							                            '<div class="col"><b>Kategori Perolehan</b><br>' + jsonobj[i].KAT_PEROLEHAN + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col"><b>Status</b><br>' + jsonobj[i].STATUS + '</div>'+
							                        '</div>'+
							                        '<div class="row">'+
							                            '<div class="col">'+
							                            	'<button class="button button-block button-positive" onclick="openKelulusan(' + jsonobj[i].APP_ID + ')">Proses</button>'+
							                            '</div>'+
							                       '</div>'+
							   					'</ion-item>'+
							                  '</div>' +
							                '</div>';
							                
							                
							                  
  
                
											}
											

					            	$("#getSenaraiTindakan_DATA").html (datax);
					            	$("#getSenaraiTindakan_DATA").trigger("create");
            	
					                //after load data through ajax, initialize accordion
					                //$('.collapsible').collapsible({accordion: false});

						  		}

							}
						});					
                    
            	    	
    }
    
</script>

</body></html>