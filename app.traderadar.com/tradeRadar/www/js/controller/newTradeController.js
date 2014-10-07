define(['angular'], function(angular) {
    'use strict';

    var tradeController = function($scope, $stateParams, Trades) {

        console.log('tradeNew controllers loaded');

        $scope.trades = new Trades();
        $scope.trades.data = {
            'CrossReference': 1,
            'TimeFrame': 2,
            'TechnicalPatterns': 2,
            'OperationType': 2,
            'Volume': 2,
            'CapitalRisk': 2,
            'EntryPrice': 2,
            'StopLoss': 2
        };

        console.log('ID-Trade: ', $stateParams.idTrade);
        if ($stateParams.idTrade > 0) {
            console.log('load trade: ', $stateParams.idTrade);
            var loadedTrade = Trades.get({
                id: $stateParams.idTrade
            }, function() {
                console.log(loadedTrade);
            }); // get() returns a single entry

            $scope.trades.data = loadedTrade.data;

        }

        $scope.saveTradeData = function() {
            console.log('saveTradeData', $scope.trades);
            $scope.trades.$save($scope.trades, function() {
                console.log('Trade saved', $scope.trades);
                $stateParams.idTrade = $scope.trades.tradeId;
            }); //saves an entry. Assuming $scope.entry is the Entry object  
        };

        $scope.resetEditedData = function() {
            $scope.trades.data = loadedTrade.data;
        };

    };

    angular.module('traderadar.controllers')
        .controller('TradeNewCtrl', ['$scope', '$stateParams', 'Trades', tradeController]);

});