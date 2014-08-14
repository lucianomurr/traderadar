'use strict';
define(['angular', 'ionic'], function() {

  angular.module('starter.controllers', [])
    .controller('DashboardCtrl', function($scope) {
      $scope.trades = [{
        img: 'img/01.png',
        id: 1,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        id: 2,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        id: 3,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        id: 4,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        id: 5,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }, {
        img: 'img/01.png',
        id: 6,
        crossreference: 'USD - EUR',
        entry: '2.3673',
        stoploss: '240M'
      }];
      console.log($scope.playlists);
    });
});