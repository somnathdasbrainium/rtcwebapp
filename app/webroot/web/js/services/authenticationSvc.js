angular.module('authorizationSvc', [])

.service('authorization', function($http, $httpParamSerializer){

    this.userRegister = function(userRegisterDetails){        
        return $http({
            method: 'POST',
            url: BASE_URL+'registration',
            data:$httpParamSerializer({
                first_name: userRegisterDetails.fristName,
                last_name: userRegisterDetails.lastName,
                email: userRegisterDetails.email,                
                password: userRegisterDetails.password,
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response){
            return(response);
        })
    }   

    this.userLogin = function(userLoginDetails){      
        return $http({
            method: 'POST',
            url: BASE_URL+'login',
            data:$httpParamSerializer({
                email: userLoginDetails.loginId,
                password: userLoginDetails.loginPassword
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response){
            return(response);
        })
    }

     /*this.userVeriri = function(userVerifiDetails, token){        
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/verify?token='+token,
            data: {
                verificationid: userVerifiDetails.verifiCode
            }
        }).then(function(response){
            return response;
        })
    }

    this.forgotPassword = function(forgotPass){        
        return $http({
            method: 'POST',
            url:  BASE_URL+'/user/forgotPassword',
            data: {
                email: forgotPass.registerEmail
            }
        }).then(function(response){
            return response;
        })
    }

    this.forgotNewPassword = function(forgotNewPass, userid){        
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/updatePassword',
            data: {
                id: userid,
                newpassword: forgotNewPass.newPassword
            }
        }).then(function(response){
            return response;
        })
    }*/

});

/*.service('dashboard', function($http){

    this.myInfo = function(token){
        return $http({
            method: 'GET',
            url: BASE_URL+'/user/userDetails?token='+token
        }).then(function(response){
            return response;
        })
    }

    this.userSearch = function(userSearch, token){
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/searchUsers?token='+token,
            data: {
                details: userSearch
            }
        }).then(function(response){
            return response;
        })
    }

    this.userStatus = function(userid, token){
        
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/checkContact?token='+token,
            data: {
                id: userid
            }
        }).then(function(response){
            return response;
        })
    }

    this.sendRequest = function(userid, token){        
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/sendRequest?token='+token,
            data: {
                id: userid
            }
        }).then(function(response){
            return response;
        })
    }

    this.acceptRequest = function(userid, token){
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/acceptRequest?token='+token,
            data: {
                id: userid
            }
        })
    }

    this.blockRequest = function(userid, token){
        return $http({
            method: 'POST',
            url: BASE_URL+'/user/blockUser?token='+token,
            data: {
                id: userid
            }
        })
    }

    this.palList = function(token){
        return $http({
            method: 'GET',
            url: BASE_URL+'/user/allContacts?token='+token
        }).then(function(response){
            return response;
        })
    }

})*/