define(['angular'], function(angular) {
    'use strict';

    var LoginController = function($scope, $ionicModal, $timeout, $log) {

        $log.info('Login controller');
        if ($scope.loginData.userID === undefined) {
            $scope.login();
        }

    };

    //register controller
    angular.module('traderadar.controllers')
        .controller('LoginController', LoginController);
});