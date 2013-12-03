'use strict';

angular.module('kategreen')
  .controller('TabsCtrl', function ($scope,$location) {
    $scope.tabs = [
    	 { title: 'portfolio', route: '/portfolio' },
    	 { title: 'resume', route: '/resume' },
    	 { title: 'ideas', route: '/blog' },
    	 { title: 'stuff', route: '/' }
    ];

    $scope.getClass = function(path) {
	    if ($location.path() === path) {
	      return "active"
	    } else {
	      return ""
	    };
	}

  });
