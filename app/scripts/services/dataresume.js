'use strict';

/**
 * @ngdoc service
 * @name resumeApp.dataResume
 * @description
 * # dataResume
 * Factory in the resumeApp.
 */
angular.module('resumeApp')
    .factory('dataResume',['$http','$rootScope', function ($http,$rootScope) {
        // Service logic
        // ...
        var url = $rootScope.urlPrefix;

        // Public API here
        return {
            getSample : function(lan,callback){
                var req = {
                    method: 'GET',
                    url: url + 'data/resumeData.php',
                    params: { noCache: Math.floor((Math.random() * 99999) + 1) ,lan:lan }
                };
                $http(req).success(callback);
            },
            getLanguage : function(callback){
                var req = {
                    method: 'GET',
                    url: url + 'data/getLanguage.php',
                    params: { noCache: Math.floor((Math.random() * 99999) + 1)  }
                };
                $http(req).success(callback);
            },

            getSection : function(page,lan,callback){
                var req = {
                    method: 'GET',
                    url: url + 'data/resumeData.php',
                    params: { noCache: Math.floor((Math.random() * 99999) + 1), page: page, lan:lan  }
                };
                $http(req).success(callback);
            },

            changeLanguage : function(lang,callback){
                $http.get(url + 'data/changeLanguage.php?lg='+lang).success(callback);
            },

            getCategories : function(callback){
                $http.get(url + 'data/extras.php?type=categories').success(callback);
            },

            getDevelopment : function(callback){
                $http.get(url + 'data/extras.php?type=development').success(callback);
            },

            getCities : function(callback){
                $http.get(url + 'data/extras.php?type=cities').success(callback);
            },

            getFeatured : function(callback){
                $http.get(url + 'data/extras.php?type=featured').success(callback);
            },

            getVillaDetail : function(type,development,name,callback){
                $http.get(url + 'data/villaDetail.php?type='+type+'&dev='+development+'&name='+name).success(callback);
            },

            getProjectDetail : function(title,callback){
                $http.get(url + 'data/projects/index.php?title='+title).success(callback);

            }
        };
    }]);
