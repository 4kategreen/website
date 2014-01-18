'use strict';

describe('Service: Auth', function () {

  // load the service's module
  beforeEach(module('kategreenApp'));

  // instantiate service
  var Auth;
  beforeEach(inject(function (_Auth_) {
    Auth = _Auth_;
  }));

  it('should do something', function () {
    expect(!!Auth).toBe(true);
  });

  it('should return null if the user is not on the allowable list', function() {
    spyon($firebaseSimpleLogin).andReturn(1);

    expect(Auth).toBe(1);
  });

});
