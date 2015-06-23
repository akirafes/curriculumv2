factories.dataResume =  function($http){
    var factory = {};

    factory.getSample = function(callback){
        $http.get('data/resumeData.php').success(callback);
        //$http.get('data/resultados-escapia.php').success(callback);
    }

    factory.getSection = function(page,callback){
        $http.get('data/resumeData.php?page='+page).success(callback);
        //$http.get('data/resultados-escapia.php').success(callback);

    }

    factory.changeLanguage = function(lang,callback){
        $http.get('data/changeLanguage.php?lg='+lang).success(callback);
        //$http.get('data/resultados-escapia.php').success(callback);

    }

    factory.getCategories = function(callback){
        $http.get('data/extras.php?type=categories').success(callback);
    }

    factory.getDevelopment = function(callback){
        $http.get('data/extras.php?type=development').success(callback);
    }

    factory.getCities = function(callback){
        $http.get('data/extras.php?type=cities').success(callback);
    }

    factory.getFeatured = function(callback){
        $http.get('data/extras.php?type=featured').success(callback);
    }

    factory.getVillaDetail = function(type,development,name,callback){
        $http.get('data/villaDetail.php?type='+type+"&dev="+development+"&name="+name).success(callback);
    }

    factory.getProjectDetail = function(title,callback){
        $http.get('data/projects/index.php?title='+title).success(callback);

    }

    /*factory.sendEmail = function($data,callback){
        $http.post($data.url,$data).success(callback).error(callback);
    }*/


    return factory;
}