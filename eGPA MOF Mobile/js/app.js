// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.php)
// the 2nd parameter is an array of 'requires'
// 'starter.controllers' is found in controllers.js
angular.module('starter', ['ionic', 'starter.controllers'])

.run(function($ionicPlatform) {
	$ionicPlatform.ready(function() {
		// Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
		// for form inputs)
		if (window.cordova && window.cordova.plugins.Keyboard) {
			cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
		}
		if (window.StatusBar) {
			// org.apache.cordova.statusbar required
			StatusBar.styleDefault();
		}
	});
})

.config(function($stateProvider, $urlRouterProvider, $ionicConfigProvider) {
	$ionicConfigProvider.navBar.alignTitle('left');
	$ionicConfigProvider.tabs.position('bottom');
	
	$stateProvider

	.state('app', {
		url: "/app",
		abstract: true,
		templateUrl: "templates/menu.html",
		controller: 'AppCtrl'
	})

	.state('app.dashboard', {
		url: "/dashboard",
		views: {
			'menuContent': {
				templateUrl: "templates/dashboard.php",
				controller: 'CtrlDashboard'
			}
		}
	})

	.state('app.legend', {
		url: "/legend",
		views: {
			'menuContent': {
				templateUrl: "templates/legend.html"
			}
		}
	})
	
	.state('app.shared_kelulusan', {
		url: "/shared_kelulusan",
		views: {
			'menuContent': {
				templateUrl: "templates/shared_kelulusan.html",
				controller: 'CtrlSharedKelulusan'
			}
		}
	})
	
	.state('app.shared_kelulusan.proses', {
		url: '/proses',
		views: {
			'app-shared_kelulusan-proses': {
				templateUrl: 'templates/tab_proses.html',
				controller: 'CtrlTabProses'
			}
		}
	})
	
	.state('app.shared_kelulusan.memorandum', {
		url: '/memorandum',
		views: {
			'app-shared_kelulusan-memorandum': {
				templateUrl: 'templates/tab_memorandum.html',
				controller: 'CtrlTabMemorandum'
			}
		}
	})
	
	.state('app.shared_kelulusan.lampiran', {
		url: '/lampiran',
		views: {
			'app-shared_kelulusan-lampiran': {
				templateUrl: 'templates/tab_lampiran.html',
				controller: 'CtrlTabLampiran'
			}
		}
	})


	.state('app.bekalan_rundingan', {
		url: "/bekalan_rundingan",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_bekalan_rundingan.html"
			}
		}
	})	
	
	.state('app.perkhidmatan_pengecualian', {
		url: "/perkhidmatan_pengecualian",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_perkhidmatan_pengecualian.html"
			}
		}
	})
	
	.state('app.kerja_rundingan', {
		url: "/kerja_rundingan",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_kerja_rundingan.html"
			}
		}
	})
	
	.state('app.kerja_pengecualian', {
		url: "/kerja_pengecualian",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_kerja_pengecualian.html"
			}
		}
	})
	
	.state('app.kerja_arahan', {
		url: "/kerja_arahan",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_kerja_arahan.html"
			}
		}
	})
	
		.state('app.kerja_kelulusan', {
		url: "/kerja_kelulusan",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_kerja_kelulusan.html"
			}
		}
	})
	
	.state('app.kerja_skop', {
		url: "/kerja_skop",
		views: {
			'menuContent': {
				templateUrl: "templates/modul_kerja_skop.html"
			}
		}
	})
	
	;
	
	// if none of the above states are matched, use this as the fallback
	$urlRouterProvider.otherwise('/app/dashboard');
});
