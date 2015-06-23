'use strict';

/**
 * @ngdoc directive
 * @name resumeApp.directive:resumeList
 * @description
 * # resumeList
 */
angular.module('resumeApp')
  .directive('resumeList', function () {
        return{
            restrict: 'A',
            template: '<h5><i class="fa fa-plus"></i> {{data.position}}</h5><span class="year"><i class="fa fa-building-o"></i>{{data.title}}</span> <span class="year"><i class="fa fa-calendar"></i>{{data.date}}</span><p ng-bind-html="data.info"></p>',
            scope: {
                data: '=' //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
            }
        };
  });
