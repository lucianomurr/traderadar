define(['angular'], function(angular) {
    'use strict';

    var dashboardController = function($scope, $stateParams, trades) {

        console.log('dashboardController controllers loaded');

        var entry = trades.get({
            id: $scope.id
        }, function() {
            console.log(entry);
            $scope.trades = entry.payload;
        }); // get() returns a single entry


    };

    angular.module('traderadar.controllers')
        .controller('DashboardCtrl', ['$scope', '$stateParams', 'Trades', dashboardController]);
});