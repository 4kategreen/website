'use strict';

angular.module('kategreenApp')
  .service('Auth', ['$firebaseSimpleLogin', 'FIREBASE_URL', 'USERS', function($firebaseSimpleLogin, FIREBASE_URL, USERS) {
    var dataRef = new Firebase(FIREBASE_URL),
        loginObj;

    loginObj = $firebaseSimpleLogin(dataRef);

    // that's me
    if (loginObj.user !== null && loginObj.user.id !== USERS) {
      loginObj.user.$logout();
      return false;
    } else {
      return loginObj;
    }
  }]);
