'use strict';

angular.module('kategreenApp')
  .controller('BlogAdminCtrl', ['$scope', 'angularFireCollection', 'angularFire', function ($scope, angularFireCollection, angularFire) {
  	var tags = new Firebase('https://kategreen.firebaseio.com/tags');

  	$scope.master = {};

    $scope.posts = angularFireCollection(new Firebase('https://kategreen.firebaseio.com/posts'), function() {

    });

    angularFire(tags, $scope, 'tags');

    $scope.reset = function() {
    	$scope.post = angular.copy($scope.master);
    };

    $scope.submit = function() {
    	$scope.post.date = Date.now();

    	$scope.posts.add($scope.post);

    	$scope.reset();
    };
  }]);
