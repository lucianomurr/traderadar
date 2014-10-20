define(['angular'], function(angular) {
    'use strict';

    var crossreference = function($log, $resource) {
        // Simplest resource definition

        return $resource('http://api.traderadar.com/crossreference/:id'); // Note the full endpoint address

    };

    angular.module('traderadar.factories')
        .factory('CrossReference', ['$log', '$resource', crossreference]);

});