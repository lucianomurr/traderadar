define(['angular'], function(angular) {
    'use strict';

    var trades = function($log, $resource) {
        // Simplest resource definition

        return $resource('http://api.traderadar.com/trades/:id'); // Note the full endpoint address

    };

    angular.module('traderadar.factories')
        .factory('Trades', ['$log', '$resource', trades]);

});