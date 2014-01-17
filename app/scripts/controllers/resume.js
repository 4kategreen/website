'use strict';

angular.module('kategreenApp')
  .controller('ResumeCtrl', ['$firebase', 'FIREBASE_URL', function ($firebase, FIREBASE_URL) {
    this.resume = $firebase(new Firebase(FIREBASE_URL + '/resume'));
  }]);