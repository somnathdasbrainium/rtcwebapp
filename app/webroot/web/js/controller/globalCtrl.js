angular.module('globalCtrl', [])

.controller('globalCtrl', function($scope, $state, $timeout, $rootScope, authorization, $mdToast, $mdDialog, $http) {
  
  var token = localStorage.getItem('token');
  $scope.logoutLink = false; 

  $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams){
    $scope.msgBlock = false;
  })

  $scope.user = {};
  $scope.msgBlock = false;

  $scope.userRegisterSubmit = function(){    

    if($scope.user.fristName === '' || $scope.user.fristName === undefined ){
      $scope.firstNameError = true;
    }else{
      $scope.firstNameError = false;      
    }

    if($scope.user.lastName === '' || $scope.user.lastName === undefined ){
      $scope.lastNameError = true;
    }else{
      $scope.lastNameError = false;      
    }

    if($scope.user.email === '' || $scope.user.email === undefined){
        $scope.emailBlankError = true
      }else{
        $scope.emailBlankError = false;      
    }

    if($scope.user.password === '' || $scope.user.password === undefined){
        $scope.passwordBlankError = true
        $scope.passwordInvalidError = false
      }else{
        $scope.passwordBlankError = false;
        if($scope.user.password.length < 6){
          $scope.passwordInvalidError = true
        }else{
          $scope.passwordInvalidError = false;
        }      
    }

    if(
      $scope.firstNameError == false &&
      $scope.lastNameError == false &&
      $scope.emailBlankError == false &&
      $scope.passwordInvalidError == false &&
      $scope.passwordBlankError == false
      ){

      authorization.userRegister($scope.user).then(function(response){
          console.log(response);
          if(response.data.success){            
              $scope.message = response.data.message;
              $scope.user = {};
              $scope.showRegSuccessModal(response);
          }else{            
              $scope.msgBlock = true;
              $scope.message = response.data.message;         
          }
      });
    };

  };

  $scope.showRegSuccessModal = function(response) {
      $mdDialog.show({
        controller: regSuccessModalCtrl,       
        templateUrl: 'templates/modal/registerSuccessModal.html',
        parent: angular.element(document.body),      
        clickOutsideToClose:false,
        fullscreen: $scope.customFullscreen
      });
      function regSuccessModalCtrl($scope, $state, $mdDialog, $timeout) {    
          $scope.message = response.data.message
          $scope.cancelModal = function(){
            $mdDialog.cancel();                         
            $state.go('app.login');                      
          }     
      };
  };

  $scope.userLoginSubmit = function(){   
   
    if($scope.user.loginId === '' || $scope.user.loginId === undefined ){
        $scope.loginIdError = true;
      }else{
        $scope.loginIdError = false;      
      }

    if($scope.user.loginPassword === '' || $scope.user.loginPassword === undefined ){
        $scope.passwordBlankError = true;
      }else{
        $scope.passwordBlankError = false;      
      }

    if(
        $scope.loginIdError == false &&
        $scope.passwordBlankError == false
        ){

        authorization.userLogin($scope.user).then(function(response){
         console.log(response); 
         if(response.data.success){
              localStorage.setItem('token', response.data.token);
              $state.go('app.chatBoot');
              $scope.logoutLink = true; 
          }else{
              $scope.msgBlock = true;
              $scope.msgBlockTheme = false;
              $scope.message = response.data.message; 
          }
        })

      }
  }  

$scope.logout = function(){
  $state.go('app.login');
  localStorage.removeItem('token');
  $scope.logoutLink = false;  
};

});