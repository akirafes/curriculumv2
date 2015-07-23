'use strict';

/**
 * @ngdoc service
 * @name resumeApp.sections
 * @description
 * # sections
 * Service in the resumeApp.
 */
angular.module('resumeApp')
  .service('sections', function () {
    // AngularJS will instantiate a singleton by calling "new" on this function

        var obj = {
            section : '',
            lan : ''
        };
        return{
            getSection : function(){
                return obj.section;
            },
            setSection : function(value){
                obj.section = value;
            },
            getLanguage : function(){
                return obj.lan;
            },
            setLanguage : function(value){
                obj.lan = value;
            }
        };
  });
