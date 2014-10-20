define(['angular'], function(angular) {
    'use strict';

    var tradeController = function($scope, $stateParams, Trades, TimeFrame, CrossReference) {

        console.log('tradeNew controllers loaded');


        /**
         * get crossreference entities
         * @return {payload}   crossreference $resources
         */
        var i,
            crossreferences = CrossReference.get({
                id: $scope.id
            }, function() {
                $scope.crossreferences = crossreferences.payload;
            }),

            /**
             * get timeframe entities
             * @return {payload}   timeframe $resources
             */
            timeframes = TimeFrame.get({
                id: $scope.id
            }, function() {
                $scope.timeframes = timeframes.payload;
            });

        $scope.capitalRisks = [];
        for (i = 1; i < 100; i++) {
            $scope.capitalRisks.push({
                'id': i,
                'name': i
            });
        }

        /**
         * declare new Trades Resources
         */
        $scope.trades = new Trades();
        $scope.trades.data = {};

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
        .controller('TradeNewCtrl', ['$scope', '$stateParams', 'Trades', 'TimeFrame', 'CrossReference', tradeController]);

});