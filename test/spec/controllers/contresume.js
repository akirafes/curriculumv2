'use strict';

describe('Controller: ContresumeCtrl', function () {

  // load the controller's module
  beforeEach(module('resumeApp'));

  var ContresumeCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ContresumeCtrl = $controller('ContresumeCtrl', {
      $scope: scope
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(scope.awesomeThings.length).toBe(3);
  });
});
