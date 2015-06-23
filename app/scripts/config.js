/**
 * Created by Fernando on 22/06/2015.
 */
'use strict';

angular
    .module('resumeApp').config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.

            when('/:page', {
                templateUrl : function(page){  return  '/views/' + page.page + '.html';},
                controller: 'PrincipalCtrl',
                controllerAs: 'principal'
            }).
            when('/projects/:title', {
                templateUrl: '/views/project-detail.html',
                controller: 'contProjects'
            }).
            when('/contact/:title', {
                templateUrl: '/views/contact.html',
                controller: 'contContact'
            }).
            otherwise({
                redirectTo: '/profile'
            });
    }]).
    config(function(uiGmapGoogleMapApiProvider) {
        uiGmapGoogleMapApiProvider.configure({
            //    key: 'your api key',
            v: '3.17',
            libraries: 'weather,geometry,visualization'
        });
    }).run(function($rootScope) {
        // $rootScope.urlPrefix = 'http://soyosung/API/';
        $rootScope.urlPrefix = 'http://curriculum.fer.cc/';

        // you can inject any instance here
    });

