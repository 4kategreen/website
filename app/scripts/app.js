'use strict';

angular.module('kategreenApp', ['ngRoute','ngSanitize','firebase'])
  .constant('FIREBASE_URL', 'https://kategreen.firebaseio.com')
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/blog.html',
        controller: 'BlogCtrl as blog'
      })
      .when('/blog', {
        templateUrl: 'views/blog.html',
        controller: 'BlogCtrl as blog'
      })
      .when('/resume', {
        templateUrl: 'views/resume.html',
        controller: 'ResumeCtrl'
      })
      .when('/portfolio', {
        templateUrl: 'views/portfolio.html',
        controller: 'PortfolioCtrl'
      })
      .when('/admin/add', {
        templateUrl: 'views/admin/add.html',
        controller: 'BlogAdminCtrl',
        authRequired: true
      })
      .when('/admin/', {
        templateUrl: 'views/admin/posts.html',
        controller: 'BlogAdminCtrl',
        authRequired: true
      })
      .when('/admin/:id', {
        templateUrl: 'views/admin/edit.html',
        controller: 'BlogAdminCtrl',
        authRequired: true
      })
      .otherwise({
        redirectTo: '/'
      });
  })
  .run(['$rootScope', '$location', '$firebaseSimpleLogin', 'FIREBASE_URL', function($rootScope, $location, $firebaseSimpleLogin, FIREBASE_URL) {
    var dataRef = new Firebase(FIREBASE_URL);
    
    $rootScope.loginObj = $firebaseSimpleLogin(dataRef);
    
    $rootScope.$on('$routeChangeStart', function(event, currRoute, prevRoute){
      // also create a test that it's not me.
      // reload redirects
      if (currRoute.$$route.authRequired && !$rootScope.loginObj.user) {
        // make a modal or something here.
        $location.path('/')
      }
    });
  }]);
