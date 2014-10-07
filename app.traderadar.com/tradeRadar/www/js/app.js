define(['angular',
    'angularIonic',
    'config',
    'factory/trades',
    'controller/appController',
    'controller/dashboardController',
    'controller/loginController',
    'controller/newTradeController',
    'controller/archiveController',
], function(angular) {
    'use strict';

    // Ionic Starter App
    return angular.module('starter', ['ionic',
            'traderadar.controllers',
            'traderadar.factories',
            'ngResource'
        ])
        .config(function($stateProvider, $urlRouterProvider) {


            // Ionic uses AngularUI Router which uses the concept of states
            // Learn more here: https://github.com/angular-ui/ui-router
            // Set up the various states which the app can be in.
            // Each state's controller can be found in controllers.js
            // setup an abstract state for the tabs directive     
            $stateProvider
                .state('app', {
                    url: "/app",
                    abstract: true,
                    templateUrl: "templates/menu.html",
                    controller: 'AppCtrl'
                })
                .state('app.dashboard', {
                    url: '/dashboard',
                    views: {
                        'menuContent': {
                            templateUrl: 'templates/dashboard.html',
                            controller: 'DashboardCtrl'
                        }
                    }
                })
                .state('app.trade', {
                    url: '/trade/:idTrade',
                    views: {
                        'menuContent': {
                            templateUrl: 'templates/trade.html',
                            controller: 'TradeNewCtrl'
                        }
                    }
                }).state('app.archive', {
                    url: '/archive',
                    views: {
                        'menuContent': {
                            templateUrl: 'templates/archive.html',
                            controller: 'ArchiveCtrl'
                        }
                    }
                });

            // if none of the above states are matched, use this as the fallback
            $urlRouterProvider.otherwise('/app/dashboard');

        });
});