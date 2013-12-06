'use strict';

angular.module('kategreenApp')
  .controller('BlogCtrl', ['$scope', 'angularFireCollection', function ($scope, angularFireCollection) {
    $scope.posts = angularFireCollection(new Firebase('https://kategreen.firebaseio.com/posts'));
  }]);
