'use strict';

/**
 * @ngdoc directive
 * @name resumeApp.directive:footer
 * @description
 * # footer
 */
angular.module('resumeApp')
  .directive('footer', function () {
        return{
            restrict: 'E',
            template: '<div class="row"><div class="col-md-7"><p>{{info.text}}</p></div><div class="col-md-5"><ul class="social"><li><a data-ng-href="{{info.linkedin}}"><i class="fa fa-linkedin-square"></i></a></li><li><a data-ng-href="{{info.twitter}}"><i class="fa fa-twitter"></i></a></li><li><a data-ng-href="{{info.facebook}}"><i class="fa fa-facebook"></i></a></li><li><a data-ng-href="{{info.google}}"><i class="fa fa-google-plus"></i></a></li></ul></div></div>',
            scope: {
                info: '=' //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
            }
        };
  });
