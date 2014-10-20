define(['angular'], function(angular) {
    'use strict';

    var timeframe = function($log, $resource) {
        // Simplest resource definition

        return $resource('http://api.traderadar.com/timeframe/:id'); // Note the full endpoint address

    };

    angular.module('traderadar.factories')
        .factory('TimeFrame', ['$log', '$resource', timeframe]);

});