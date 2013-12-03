'use strict';

describe('Controller: TabsCtrl', function () {

  // load the controller's module
  beforeEach(module('kategreen'));

  var TabsCtrl,
    scope,
    location;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope, $location) {
    scope = $rootScope.$new();
    location = $location;
    TabsCtrl = $controller('TabsCtrl', {
      $scope: scope
    });
  }));

  it('should have four tabs', function () {
    expect(scope.tabs.length).toBe(4);
  });

  it('should return active when $location.path() is the same as path', function() {
    var active;

    spyOn(location, 'path').andReturn('thisPath');

    active = scope.getClass('thisPath');

    expect(active).toBe('active');
  })
});
