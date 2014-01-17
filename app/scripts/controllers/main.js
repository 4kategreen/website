'use strict';

angular.module('kategreenApp')
  .controller('MainCtrl', ['$firebaseSimpleLogin', '$rootScope', function ($firebaseSimpleLogin, $rootScope) {
    var main = this;

    main.loginObj = $rootScope.loginObj;
  }]);