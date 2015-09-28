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
	$MEMOTAB =  " tab-item-active ";
	$DOKUMENTAB = "";
	$LAMPIRANTAB = "";
    
include("menu_bottom.php"); 
?>
		
<!--
    <a class="tab-item" href="kelulusan_proses.php">
        <i class="icon ion-compose"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Proses</span>
    </a>
    <a class="tab-item tab-item-active" href="kelulusan_memorandum.php">
        <i class="icon ion-document"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Memorandum</span>
    </a>
    <a class="tab-item" href="kelulusan_lampiran.php">
        <i class="icon ion-paperclip"></i>
        <span class="tab-title ng-binding" ng-bind-html="title">Lampiran</span>
    </a>
-->
    
    </div><ion-nav-view nav-view-direction="none" nav-view-transition="ios" nav-view="active" class="view-container tab-content" name="app-shared_kelulusan-proses"><div style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane"><ion-view class="pane">



    
    <ion-content class="scroll-content ionic-scroll overflow-scroll has-header has-tabs" overflow-scroll="true"><div class="scroll">
        <div class="breadcrumb ng-binding">Bekalan &amp; Perkhidmatan Bukan Perunding &gt; Rundingan Terus Agensi &gt; Kelulusan Memorandum</div>
        <div class="paddingContent justify" style="z-index:1000">
        	
        	 
        	<iframe name="iframememo" id="iframememo" src="iframememo.php" height="700px" width="100%"></iframe>
        	 
        	<!--
        	 <div style="z-index:1000">
	        	DATA SEBENAR : http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=870&p_app_type=1&p_kat_perolehan=4&random=8877
	        	<br>
        	</div>
        	<iframe src="http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&amp;password=xs2egpaadmin&amp;p_app_id=870&amp;p_app_type=1&amp;p_kat_perolehan=4&amp;random=" height="700px" width="100%"></iframe>
        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
        	-->
        
        
        
        </div>
        
	</div>
	
	
	</ion-content>
	
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
        //alert("memorandum for id="+id);
        
        
        var appId = gup ("id");
		var appType = gup ("appType");
		var katPerolehan = gup ("katPerolehan");

		$("#appId").val (appId);
	  	$("#appType").val (appType);
	  	$("#katPerolehan").val (katPerolehan);
	  	
	  	var TX = "" + Math.random();
	  	//var urlreport = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
	  	//var urlreport = "http://egpa-training.treasury.gov.my:8643/report/api/repos/:home:egpaadmin:egpa:memo_sbpk_tsbpk_kspk.prpt/report?userid=egpaadmin&password=xs2egpaadmin&p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
	  	var url = "iframememo.php?p_app_id=" + appId + "&p_app_type=" + appType + "&p_kat_perolehan=" + katPerolehan + "&random=" + TX;
	  	
	  	alert("URL====>" + url);
	  	
	  	$('#iframememo').attr('src', url);
	  		alert("INJECT BERJAYA");
	  	
	  	  //alert('hoi');
        
        $('.tab-item').each(function(){
            $(this).attr("href", $(this).attr("href")+"?id="+appId);
        });
    });

			
</script>

</body></html>