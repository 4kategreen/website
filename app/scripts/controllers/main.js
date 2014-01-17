'use strict';

angular.module('kategreenApp')
  .controller('MainCtrl', ['$scope','$firebaseSimpleLogin', '$rootScope', function ($scope, $firebaseSimpleLogin, $rootScope) {

    $scope.loginObj = $rootScope.loginObj;
  }]);