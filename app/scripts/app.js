'use strict';

angular.module('kategreenApp', ['ngRoute','ngSanitize','firebase'])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/blog', {
        templateUrl: 'views/blog.html',
        controller: 'BlogCtrl'
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
        controller: 'BlogAdminCtrl'
      })
      .when('/admin/', {
        templateUrl: 'views/admin/posts.html',
        controller: 'BlogAdminCtrl'
      })
      .when('/admin/:id', {
        templateUrl: 'views/admin/edit.html',
        controller: 'BlogAdminCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
