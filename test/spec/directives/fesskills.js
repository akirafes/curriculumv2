'use strict';

describe('Directive: fesSkills', function () {

  // load the directive's module
  beforeEach(module('resumeApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<fes-skills></fes-skills>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the fesSkills directive');
  }));
});
