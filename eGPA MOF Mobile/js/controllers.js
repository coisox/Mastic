angular.module('starter.controllers', [])

.controller('AppCtrl', function($rootScope, $scope, $ionicModal, $timeout, $state) {
	// Form data for the login modal
	$scope.loginData = {};

	// Create the login modal that we will use later
	$ionicModal.fromTemplateUrl('templates/login.html', {
		scope: $scope
	}).then(function(modal) {
		$scope.modal = modal;
	});

	// Triggered in the login modal to close it
	$scope.closeLogin = function() {
		$scope.modal.hide();
	};

	// Open the login modal
	$scope.login = function() {
		$scope.modal.show();
	};

	// Perform the login action when the user submits the login form
	$scope.doLogin = function() {
		console.log('Doing login', $scope.loginData);

		// Simulate a login delay. Remove this and replace with your login
		// code if using a login system
		$timeout(function() {
			$scope.closeLogin();
		}, 1000);
	};
	
	$scope.goTo = function(stateName) {
		$state.go(stateName);
	};
	
	//Accordian
	//=========================================================================
	$rootScope.toggleGroup = function(list) {
		if ($scope.isGroupShown(list)) {
			$scope.shownGroup = null;
		} else {
			$scope.shownGroup = list;
		}
	};
	$rootScope.isGroupShown = function(list) {
		return $scope.shownGroup === list;
	};
	//=========================================================================
	
	
	$scope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams) {
		if(toState['name']=="app.legend" || toState['name']=="app.shared_kelulusan" || toState['name'].indexOf('app.shared_kelulusan.')>-1) {
			$('[navMofLegend]').hide();
		}
		else $('[navMofLegend]').show();
	});
	
	
	//Skrin Kelulusan
	//=========================================================================
	$rootScope.openKelulusan = function(list) {
		$rootScope.rootList = list;
		$state.go('app.shared_kelulusan');
	};
	//=========================================================================
	
})

.controller('CtrlDashboard', function($scope, $http, $ionicModal, $ionicPopup) {
		
	$scope.searchBekalanRundingan = "";
	
	$http.get("SenaraiTindakanPenggunaBpk.json").success(function(msg){
		$scope.SenaraiTindakanPenggunaBpk = msg;
	});
	
	
	//Action Button - Search
	//=========================================================================
	$scope.showSearch = function() {
		var myPopup = $ionicPopup.show({
			template: '<input type="text" autofocus="true" ng-init="searchBekalanRundinganMirror=searchBekalanRundingan" ng-model="searchBekalanRundinganMirror" placeholder="Search" style="padding-left:10px;">',
			scope: $scope,
			buttons: [
				{
					text: 'Ok',
					type: 'button-positive',
					onTap: function(e) {
						$scope.searchBekalanRundingan = $('[ng-model="searchBekalanRundinganMirror"]').val();
					}
				},
				{
					text: 'Clear',
					onTap: function(e) {
						$scope.searchBekalanRundingan = "";
					}
				}
			]
		});
	};
	//=========================================================================
	
	
	
})

.controller('CtrlSharedKelulusan', function($scope) {

})

.controller('CtrlTabProses', function($scope, $state) {
	$scope.toParent = function() {
		$state.go('app.dashboard');
	}
})

.controller('CtrlTabMemorandum', function($scope, $state) {
	
})

.controller('CtrlTabLampiran', function($scope, $state) {

})

;