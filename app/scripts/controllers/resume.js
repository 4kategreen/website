'use strict';

angular.module('kategreenApp')
  .controller('ResumeCtrl', ['$scope', '$firebase', 'FIREBASE_URL', function ($scope, $firebase, FIREBASE_URL) {
    $scope.resume = $firebase(new Firebase(FIREBASE_URL + '/resume'));
  }]);