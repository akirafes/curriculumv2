'use strict';

/**
 * @ngdoc directive
 * @name resumeApp.directive:contactForm
 * @description
 * # contactForm
 */
angular.module('resumeApp')
  .directive('contactForm', function () {
        return{
            restrict: 'C',
            templateUrl : '/views/contact-comment.html',
            scope: {
                contactData: '=' //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
            },
            controller: function($scope,$http,$templateCache){
                $scope.visibleMsg = 'msg visibleMsg';
                $scope.invisibleMsg = 'msg invisibleMsg';
                $scope.loaderMsg = 'msg loaderMsg invisibleMsg';
                $scope.submitted = false;


                $scope.sendMsg = function(){
                    $scope.submitted = true;
                    if($scope.frmContact.$valid) {
                        $scope.visibleMsg = 'msg invisibleMsg';
                        $scope.loaderMsg = 'msg loaderMsg visibleMsg';
                        $http({method: 'post', url: $scope.contactData.url,data : $scope.contactData,  cache: $templateCache}).
                            success(function(data, status) {
                                $scope.status = status;
                                $scope.data = data;
                                $scope.loaderMsg = 'msg loaderMsg invisibleMsg';
                                $scope.invisibleMsg = 'msg visibleMsg visibleMsg';
                                console.log($scope.data);
                            }).
                            error(function(data, status) {
                                $scope.data = data || 'Request failed';
                                $scope.status = status;
                                $scope.loaderMsg = 'msg loaderMsg invisibleMsg';
                                $scope.invisibleMsg = 'msg visibleMsg visibleMsg';
                                console.log($scope.data);
                            });

                    } else {
                        console.log('Errors in form data');
                    }
                    //
                    //$scope.invisibleMsg = 'msg visibleMsg';
                    //$scope.loaderMsg = 'msg loaderMsg visibleMsg'
                    //alert('hola');
                };
            }

        };
  });
