'use strict';

describe('Service: dataResume', function () {

  // load the service's module
  beforeEach(module('resumeApp'));

  // instantiate service
  var dataResume;
  beforeEach(inject(function (_dataResume_) {
    dataResume = _dataResume_;
  }));

  it('should do something', function () {
    expect(!!dataResume).toBe(true);
  });

});
