define(['angular'], function(angular) {
    'use strict';

    var archiveController = function($scope, trades) {
        console.log('archiveController controllers loaded');
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
    };

    angular.module('traderadar.controllers')
        .controller('ArchiveCtrl', 'trades', archiveController);
});