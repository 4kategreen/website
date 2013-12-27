'use strict';

angular.module('kategreenApp')
  .controller('BlogCtrl', ['$scope', '$firebase', function ($scope, $firebase) {
    $scope.posts = $firebase(new Firebase('https://kategreen.firebaseio.com/posts'));
  }]);
