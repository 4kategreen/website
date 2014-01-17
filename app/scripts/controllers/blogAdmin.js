'use strict';

angular.module('kategreenApp')
  .controller('BlogAdminCtrl', ['$scope', '$firebase', 'FIREBASE_URL', function ($scope, $firebase, FIREBASE_URL) {

  	$scope.master = {};

    $scope.posts = $firebase(new Firebase(FIREBASE_URL + '/posts'));

    $scope.tags = $firebase(new Firebase(FIREBASE_URL + '/tags'));

    $scope.reset = function() {
    	$scope.post = angular.copy($scope.master);
    };

    $scope.submit = function() {
    	$scope.post.date = Date.now();

    	$scope.posts.$add($scope.post);

    	$scope.reset();
    };
  }]);
