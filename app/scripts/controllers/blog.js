'use strict';

angular.module('kategreenApp')
  .controller('BlogCtrl', ['$firebase', 'FIREBASE_URL', function ($firebase, FIREBASE_URL) {  
    this.posts = $firebase(new Firebase(FIREBASE_URL + '/posts'));
  }]);
