'use strict';

angular.module('kategreenApp')
  .controller('BlogCtrl', ['$scope', 'angularFire', function ($scope) {
    var ref = new Firebase('https://<my-firebase>.firebaseio.com/posts');
	angularFire(ref, $scope, 'posts');
  }]);
