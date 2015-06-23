'use strict';

/**
 * @ngdoc directive
 * @name resumeApp.directive:resumeInfo
 * @description
 * # resumeInfo
 */
angular.module('resumeApp')
  .directive('resumeInfo', function () {
        return{
            restrict: 'C',
            template: '<h4>{{info.title}}</h4><div class="sep2"></div><ul><li resume-list data="edu" data-ng-repeat="edu in info.list"></li></ul>',
            scope: {
                info: '=' //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
            }
        };
  });
