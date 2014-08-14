/*
    File: main.js
    Author: Jonathan Rowny
    Description: Loads up all the things you need to make a fun app with Angular, Ionic, and Cordova
*/
require.config({
  paths: {
    //cordova: '../cordova',
    angular: '../lib/angular/angular',
    angularAnimate: '../lib/angular-animate/angular-animate',
    angularTouch: '../lib/angular-touch/angular-touch',
    angularSanitize: '../lib/angular-sanitize/angular-sanitize',
    uiRouter: '../lib/angular-ui-router/release/angular-ui-router',
    ionic: '../lib/ionic/js/ionic',
    angularIonic: '../lib/ionic/js/ionic-angular',
    text: '../lib/requirejs-plugins/lib/text'
  },
  shim: {
    'angular': {
      'exports': 'angular'
    },
    'angularAnimate': ['angular'],
    'angularTouch': ['angular'],
    'angularSanitize': ['angular'],
    'uiRouter': ['angular'],
    'ionic': {
      'exports': 'ionic'
    },
    'angularIonic': ['angular', 'ionic', 'uiRouter', 'angularAnimate', 'angularTouch', 'angularSanitize']
  },
  priority: [
    "angular"
  ]
});

require([
  //'cordova',
  'ionic',
  'angular',
  'app'
], function( /*cordova,*/ ionic, angular, app) {
  'use strict';

  var start = function() {
      angular.bootstrap(document, [app['name']]);
    }
    (document.body || device) ? start() : ionic.Platform.ready(start);

});