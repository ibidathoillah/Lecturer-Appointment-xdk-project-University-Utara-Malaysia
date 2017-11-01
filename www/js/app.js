//SETTING
//domain ='ibidathoillah.esy.es';
domain ='localhost';
localStorage.setItem("domain", domain);

angular.module('ionicApp', ['ionic'])
  
 .controller('AppCtrl', function() {

  ionic.Platform.ready(function() {
    navigator.splashscreen.hide();
  });

 });

 function imgError(image) {
		    image.onerror = "";
		    image.src = "img/user64.png";
		    return true;
}

    	  angular.module('ionicApp', ['ionic'])
            .controller('AppCtrl', function ($scope, $ionicSideMenuDelegate, $ionicPopup,$ionicLoading, $timeout) {
                io = $ionicPopup;
                il = $ionicLoading;
                $scope.toggleLeft = function () {
                    $ionicSideMenuDelegate.toggleLeft();
                };
            });
        function alert(text){
			var alertPopup = io.alert({
		       title: text
		     });
		}
              
              