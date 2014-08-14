define(['angular',
  'angularIonic',
  'controller/appController'
], function(angular) {

  // Ionic Starter App
  return angular.module('starter', ['ionic', 'starter.controllers'])
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
        });

      // if none of the above states are matched, use this as the fallback
      $urlRouterProvider.otherwise('/app/dashboard');

    });
});