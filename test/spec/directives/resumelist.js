'use strict';

describe('Directive: resumeList', function () {

  // load the directive's module
  beforeEach(module('resumeApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<resume-list></resume-list>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the resumeList directive');
  }));
});
