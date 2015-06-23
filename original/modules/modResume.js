/**
 * Created by fernando on 9/06/14.
 */
app = angular.module('resume', ['google-maps','ngAnimate','ngSanitize','ngRoute','angular-flexslider','ui.bootstrap']);
var factories = {};
var controllers = {};
var filters = {};
var services = {};

app.factory(factories);
app.controller(controllers);
app.service(services);


app.directive('footer', function()
{
    return{
        restrict: 'E',
        template: '<div class="row"><div class="col-md-7"><p>{{info.text}}</p></div><div class="col-md-5"><ul class="social"><li><a data-ng-href="{{info.linkedin}}"><i class="fa fa-linkedin-square"></i></a></li><li><a data-ng-href="{{info.twitter}}"><i class="fa fa-twitter"></i></a></li><li><a data-ng-href="{{info.facebook}}"><i class="fa fa-facebook"></i></a></li><li><a data-ng-href="{{info.google}}"><i class="fa fa-google-plus"></i></a></li></ul></div></div>',
        scope: {
            info: "=" //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
        }
    }
});

app.directive('resumeInfo', function()
{
    return{
        restrict: 'C',
        template: '<h4>{{info.title}}</h4><div class="sep2"></div><ul><li resume-list data="edu" data-ng-repeat="edu in info.list"></li></ul>',
        scope: {
            info: "=" //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
        }
    }
});


app.directive('contactForm', function()
{
    return{
        restrict: 'C',
        templateUrl : "/app/partials/contact-comment.html",
        scope: {
            contactData: "=" //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
        },
        controller: function($scope,$http,$templateCache){
            $scope.visibleMsg = "msg visibleMsg";
            $scope.invisibleMsg = "msg invisibleMsg";
            $scope.loaderMsg = "msg loaderMsg invisibleMsg";
            $scope.submitted = false


            $scope.sendMsg = function(){
                $scope.submitted = true;
                if($scope.frmContact.$valid) {
                    $scope.visibleMsg = "msg invisibleMsg";
                    $scope.loaderMsg = "msg loaderMsg visibleMsg"
                    $http({method: "post", url: $scope.contactData.url,data : $scope.contactData,  cache: $templateCache}).
                        success(function(data, status) {
                            $scope.status = status;
                            $scope.data = data;
                            $scope.loaderMsg = "msg loaderMsg invisibleMsg";
                            $scope.invisibleMsg = "msg visibleMsg visibleMsg";
                            console.log($scope.data)
                        }).
                        error(function(data, status) {
                            $scope.data = data || "Request failed";
                            $scope.status = status;
                            $scope.loaderMsg = "msg loaderMsg invisibleMsg";
                            $scope.invisibleMsg = "msg visibleMsg visibleMsg";
                            console.log($scope.data)
                        });

                } else {
                    console.log('Errors in form data');
                }
                //
                //$scope.invisibleMsg = "msg visibleMsg";
                //$scope.loaderMsg = "msg loaderMsg visibleMsg"
                //alert("hola");
            }
        }

    }
});

app.directive('resumeList', function()
{
    return{
        restrict: 'A',
        template: '<h5><i class="fa fa-plus"></i> {{data.position}}</h5><span class="year"><i class="fa fa-building-o"></i>{{data.title}}</span> <span class="year"><i class="fa fa-calendar"></i>{{data.date}}</span><p ng-bind-html="data.info"></p>',
        scope: {
            data: "=" //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
        }
    }
});

app.directive('fesSkills', function()
{
    return{
        restrict: 'A',
        template: '<p>{{skill.name}}<span>{{skill.value}}%</span></p> <progressbar max="100" value="skill.value" class="progress-striped active" type="{{skill.color}}"><span  style="color:black; white-space:nowrap;">{{skill.years}}</span></progressbar>',
        scope: {
            skill: "=" //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
        }
    }
})

/*app.directive('fesList', function()
{
    return{
        restrict: 'A',
        template: '<div><div>Hola {{ nombre }}</div>' +
            'Escribe tu edad: <input ng-model="edad" />' +
            '<a href="#" ng-click="show()">{{ link }}</div>',
        scope: {
            nombre: "@", //variables de alcance($scope) o por valor
            edad: "=", //usado para hacer uso de data-binding(datos entre vista controlador) o por referencia
            link: "@",
            show: "&"  //útiles para llamar a funciones
        },
    }
})
*/
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/:page', {
                templateUrl : function(page){  return  '/app/partials/' + page.page + ".html"},
                controller: 'sectionController'
            }).
            when('/projects/:title', {
                templateUrl: '/app/partials/project-detail.html',
                controller: 'contProjects'
            }).
            when('/contact/:title', {
                templateUrl: '/app/partials/contact.html',
                controller: 'contContact'
            }).
            otherwise({
                redirectTo: '/profile'
            });
    }]);