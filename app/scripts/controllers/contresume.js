'use strict';

/**
 * @ngdoc function
 * @name resumeApp.controller:ContresumeCtrl
 * @description
 * # ContresumeCtrl
 * Controller of the resumeApp
 */
angular.module('resumeApp')
    .controller('contResume',['dataResume','sections' ,function (dataResume,sections) {
        var vm = this;
        vm.appData = null;
        vm.currentSection = '';
        vm.lan = '';

        vm.setSection = function(page){
            vm.currentSection = page;
        };

        vm.isActive = function(section){
            var retorno = '';
            //console.log(section+" == "+sections.getSection());
            if(section === sections.getSection()){
                retorno = 'flex-active';
            }
            return retorno;
        };

        vm.changeLan = function(lg,inject){

            dataResume.changeLanguage(lg,function(result) {
                sections.setLanguage(result.lan);
                if(inject === undefined){
                    vm.appData = null;
                } else {
                    inject.getData();
                }
                vm.getData();

            });
        };

        vm.checkLanguage = function(lg){
            if(vm.appData !== null) {
                if (vm.appData.profile.language !== lg) {
                    return 'visible';
                } else {
                    return 'hidden';
                }
            }
        };

        vm.getData = function(){
            dataResume.getSample(sections.getLanguage(),function(results) {
                vm.appData = results;
            });
        };

        vm.init = function(){
            dataResume.getLanguage(function(result) {
                sections.setLanguage(result.lan);
                vm.getData();
            });

        };
        vm.init();

    }]);
