'use strict';

angular.module('kategreenApp')
  .controller('BlogCtrl', ['$scope', '$firebase', 'FIREBASE_URL', function ($scope, $firebase, FIREBASE_URL) {
    $scope.posts = $firebase(new Firebase(FIREBASE_URL + '/posts'));
  }]);
