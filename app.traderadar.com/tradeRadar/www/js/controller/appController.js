define(['angular'], function(angular) {
  'use strict';

  var LoginController = function($scope, $ionicModal, $timeout, $log) {

    $log.info('Login controller');
    if ($scope.loginData.userID === undefined) {
      $scope.login();
    }

  };

  var AppController = function($scope, $ionicModal, $timeout, $log) {
      $log.info('App controller');
      // Form data for the login modal
      $scope.loginData = {};

      // Create the login modal that we will use later
      $ionicModal.fromTemplateUrl('templates/login.html', {
        scope: $scope,
        controller: LoginController
      }).then(function(modal) {
        $scope.modal = modal;
      });

      // Triggered in the login modal to close it
      $scope.closeLogin = function() {
        $scope.modal.hide();
      },

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



    },
    DashboardController = function($scope, $log) {
      $log.info('Dashboard controller');
      $scope.trades = [{
        img: 'img/01.png',
        idTrade: 1,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        idTrade: 2,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        idTrade: 3,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        idTrade: 4,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        idTrade: 5,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        idTrade: 6,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }];
    },
    TradeNewController = function($scope, $log) {
      $log.info('TradeNew controller');
    },
    TradeEditController = function($scope, $log) {
      $log.info('TradeEdit controller');
    };


  //register controller
  angular.module('starter.controllers', [])
    .controller('AppCtrl', AppController)
    .controller('DashboardCtrl', DashboardController)
    .controller('TradeNewCtrl', TradeNewController)
    .controller('TradeEditCtrl', TradeEditController);
});