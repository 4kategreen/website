'use strict';

describe('Controller: BlogadminCtrl', function () {

  // load the controller's module
  beforeEach(module('websiteApp'));

  var BlogadminCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    BlogadminCtrl = $controller('BlogadminCtrl', {
      $scope: scope
    });
  }));

  xit('should take inputs and add them to the database');

  xit('should add a date in unix time to each entry added');

  xit('should accept multiple tags and add them to an array before submitting to the db');
});
