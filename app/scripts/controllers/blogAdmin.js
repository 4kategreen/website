'use strict';

angular.module('kategreenApp')
  .controller('BlogAdminCtrl', ['$firebase', 'FIREBASE_URL', function ($firebase, FIREBASE_URL) {

  	this.master = {};

    this.posts = $firebase(new Firebase(FIREBASE_URL + '/posts'));

    this.tags = $firebase(new Firebase(FIREBASE_URL + '/tags'));

    this.reset = function() {
    	this.post = angular.copy($scope.master);
    };

    this.submit = function() {
    	this.post.date = Date.now();

    	this.posts.$add($scope.post);

    	this.reset();
    };
  }]);
