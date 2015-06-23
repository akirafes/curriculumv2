'use strict';

/**
 * @ngdoc directive
 * @name resumeApp.directive:fesSkills
 * @description
 * # fesSkills
 */
angular.module('resumeApp')
  .directive('fesSkills', function () {
        return{
            restrict: 'A',
            template: '<p>{{skill.name}}<span>{{skill.value}}%</span></p> <progressbar max="100" value="skill.value" class="progress-striped active" type="{{skill.color}}"><span  style="color:black; white-space:nowrap;">{{skill.years}}</span></progressbar>',
            scope: {
                skill: '=' //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
            }
        };
  });
