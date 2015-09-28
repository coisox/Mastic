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
    <ion-nav-view nav-view-direction="none" nav-view-transition="ios" class="view-container"><ion-side-menus style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane view" enable-menu-with-back-views="false">
	<ion-side-menu-content class="menu-content pane">
		<ion-nav-bar nav-bar-direction="none" nav-bar-transition="ios" class="bar-stable nav-bar-container">

			<ion-nav-buttons class="hide" side="right"></ion-nav-buttons>

		<div nav-bar="active" class="nav-bar-block"><ion-header-bar align-title="left" class="bar-stable bar bar-header disable-user-behavior"><div style="transform: translate3d(0px, 0px, 0px); right: 54px;" class="title title-left header-item"><img src="img/mof_back.svg" onclick="toParent()" height="32"></div><div style="" class="buttons buttons-right header-item"><span class="right-buttons">
				<button style="display: none;" class="button button-icon button-clear ion-help-circled" navmoflegend="" onclick="showLegend()"></button>
				<button style="display: none;" class="button button-icon button-clear ion-navicon-round" menu-toggle="right" onclick="toggleMenu()"></button>
			</span></div></ion-header-bar></div>
        <div nav-bar="cached" class="nav-bar-block"><ion-header-bar align-title="left" class="bar-stable bar bar-header disable-user-behavior"><div style="transform: translate3d(-704px, 0px, 0px); right: 95px; opacity: 0;" class="title title-left header-item"><img src="img/mof.svg" height="32"></div><div style="opacity: 0;" class="buttons buttons-right header-item"><span class="right-buttons">
				<button style="display: none;" class="button button-icon button-clear ion-help-circled" navmoflegend="" onclick="showLegend()"></button>
				<button style="display: none;" class="button button-icon button-clear ion-navicon-round" menu-toggle="right"></button>
			</span></div></ion-header-bar></div></ion-nav-bar>
		<ion-nav-view nav-view-direction="none" nav-view-transition="ios" class="view-container" name="menuContent"><ion-view style="opacity: 0; transform: translate3d(0%, 0px, 0px);" nav-view="cached" class="pane" view-title="&lt;img src=&quot;img/mof.svg&quot; height=&quot;32&quot;&gt;">

    <img class="ion-ios-search" ng-click="showSearch()" src="img/action_find.svg" width="50">
</ion-view><ion-view style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane">
    <ion-nav-view nav-view-direction="none" nav-view-transition="ios" nav-view="active" class="view-container tab-content" name="app-shared_kelulusan-proses"><div style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view="active" class="pane"><ion-view class="pane">
    
    <ion-content class="scroll-content ionic-scroll overflow-scroll  has-header has-tabs" overflow-scroll="true"><div class="scroll">
        <div class="breadcrumb ng-binding">Panduan</div>
        <div class="row item item-divider">
            <div class="col col-67">Jenis Permohonan</div>
            <div class="col text-center">Tempoh Proses</div>
        </div>
        <div class="row">
            <div class="col col-67">Pengecualian Khas</div>
            <div class="col text-center">30 Hari</div>
        </div>
        <div class="row">
            <div class="col col-67">Rundingan Terus</div>
            <div class="col text-center">10 Hari</div>
        </div>
        <div class="row">
            <div class="col col-67">Muktammad Harga</div>
            <div class="col text-center">10 Hari</div>
        </div>
        <div class="row">
            <div class="col col-67">Arahan Perubahan Kerja</div>
            <div class="col text-center">30 Hari</div>
        </div>
        <div class="row">
            <div class="col col-67">Kelulusan Kuantiti Sementara</div>
            <div class="col text-center">30 Hari</div>
        </div>
        <div class="row">
            <div class="col col-67">Skop Tambahan</div>
            <div class="col text-center">30 Hari</div>
        </div>
        <br><br>
        <div class="row item item-divider">
            <div style="line-height:45px;" class="col col-33">Tempoh Proses</div>
            <div class="col text-center"><button class="button button-balanced">&nbsp;</button></div>
            <div class="col text-center"><button class="button button-energized">&nbsp;</button></div>
            <div class="col text-center"><button class="button button-assertive">&nbsp;</button></div>
        </div>
        <div class="row">
            <div class="col col-33">30 Hari</div>
            <div class="col text-center">30-20 Hari</div>
            <div class="col text-center">19-10 Hari</div>
            <div class="col text-center">9-0 Hari</div>
        </div>
        <div class="row">
            <div class="col col-33">14 Hari</div>
            <div class="col text-center">14-11 Hari</div>
            <div class="col text-center">10-7 Hari</div>
            <div class="col text-center">6-0 Hari</div>
        </div>
        <div class="row">
            <div class="col col-33">10 Hari</div>
            <div class="col text-center">10-8 Hari</div>
            <div class="col text-center">7-4 Hari</div>
            <div class="col text-center">3-0 Hari</div>
        </div>
	</div></ion-content>
</ion-view>
</div></ion-nav-view>

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

</body></html>