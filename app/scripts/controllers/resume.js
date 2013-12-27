'use strict';

angular.module('kategreenApp')
  .controller('ResumeCtrl', ['$scope', '$firebase', function ($scope, $firebase) {
    $scope.resume = $firebase(new Firebase('https://kategreen.firebaseio.com/resume'));
  }]);