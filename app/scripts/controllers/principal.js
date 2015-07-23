'use strict';

/**
 * @ngdoc function
 * @name resumeApp.controller:PrincipalCtrl
 * @description
 * # PrincipalCtrl
 * Controller of the resumeApp
 */
angular.module('resumeApp')
    .controller('PrincipalCtrl',[ '$route', '$routeParams','$timeout', '$log','$interval','dataResume','sections',function ($route, $routeParams,$timeout, $log,$interval,dataResume,sections) {
        var vm = this;


        vm.loading = true;
        sections.setSection($routeParams.page);
        vm.section = null;
        vm.skills = ['back', 'front','CMS','other'];
        vm.isLoaded = false;
        vm.viVar = 'hola Fercho';

        vm.getData = function(){
            dataResume.getSection($routeParams.page, sections.getLanguage(), function (results) {
                vm.section = results;
                vm.isLoaded = true;
            });
        };

        var loadPage = $interval(function () {
            if(!vm.isLoaded && sections.getLanguage !== '') {
                vm.getData();
            }
        }, 1000);


        vm.getSkill = function(skillname, other){
            var mySkill = vm.section[skillname];
            var retorno;
            switch(other){
                case 'title':
                    retorno = mySkill.title;
                    break;
                case 'list':
                    retorno = mySkill.skills;
            }
            return retorno;
        };



        /* inicia maps */
        vm.contact = {url:'/data/sendMail.php'};
        //google.maps.visualRefresh = true;

        angular.extend(vm, {
            map: {
                control: {},
                center: {
                    latitude: 23.0515562,
                    longitude:-109.7128078
                },
                options: {
                    streetViewControl: false,
                    panControl: false,
                    maxZoom: 20,
                    minZoom: 14
                },
                zoom: 14,
                dragging: false,
                bounds: {},

                dynamicMarkers: [],
                refresh: function () {
                    vm.map.control.getGMap().setZoom(14);
                    vm.map.control.refresh(origCenter);

                    // alert("refresh");
                }
            }
        });



        vm.refreshMap = function () {
            //optional param if you want to refresh you can pass null undefined or false or empty arg
            //vm.map.control.refresh({latitude: vm.map.center.latitude, longitude: vm.map.center.longitude});

        };

        vm.zoomMap = function () {
           // vm.map.control.getGMap().setZoom(14);
        };

        var markerToClose = null;


        $timeout(function () {
            var dynamicMarkers = [
                {
                    id: 3,
                    icon: '/images/home-map.png',
                    latitude: vm.map.center.latitude, longitude: vm.map.center.longitude
                }
            ];
            _.each(dynamicMarkers, function (marker) {
                marker.closeClick = function () {
                    marker.showWindow = false;
                    vm.$apply();
                };
                marker.onClicked = function () {
                    vm.onMarkerClicked(marker);
                };
            });
            vm.map.dynamicMarkers = dynamicMarkers;
            vm.refreshMap();
        }, 1000);

        $timeout(function () {

            vm.zoomMap();
        }, 1500);


        $timeout(function () {

            vm.zoomMap();
        }, 4000);
        var origCenter = {latitude: vm.map.center.latitude, longitude: vm.map.center.longitude};
        /* termina maps */
    }]);
