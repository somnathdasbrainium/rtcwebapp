(function () {

"use strict";

angular.module('chatBoot', [])

.controller('chatBootCtrl', function($scope, $state, chatBootSvc) {  
  
  var sessionid = localStorage.getItem('token')
   
  $scope.chatBoot = function(){
  	
    if(sessionid != undefined && sessionid != null){
      	chatBootSvc.chatBootTokenSender(sessionid).then(function(response){
          console.log(response);
      		if(response.data.success){
            window.open(CHATSERVER+'authuser?token='+sessionid);
          }else{
            $state.go('app.login');
          }
    	  })
    }else{
    	$state.go('app.login');    	
    }

  }  

})

.service('chatBootSvc', function($http, $httpParamSerializer){

    this.chatBootTokenSender = function(sessionid){
    console.log(sessionid);        
        return $http({
            method: 'POST',
            url: BASE_URL+'authuser',
            data:$httpParamSerializer({
                token: sessionid
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response){
            return(response);
        })
    }   

})

}());