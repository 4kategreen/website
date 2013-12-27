'use strict';

angular.module('kategreenApp')
  .controller('BlogAdminCtrl', ['$scope', '$firebase', function ($scope, firebase) {
  	var tags = new Firebase('https://kategreen.firebaseio.com/tags');

  	$scope.master = {};

    $scope.posts = $firebase(new Firebase('https://kategreen.firebaseio.com/posts'));

    $scope.tags = $firebase(new Firebase('https://kategreen.firebaseio.com/tags'));

    $scope.reset = function() {
    	$scope.post = angular.copy($scope.master);
    };

    $scope.submit = function() {
    	$scope.post.date = Date.now();

    	$scope.posts.$add($scope.post);

    	$scope.reset();
    };
  }]);
