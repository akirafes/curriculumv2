/**
 * Created by fernando on 9/06/14.
 */
controllers.contResume = function($scope,dataResume){
    $scope.appData = null;
    $scope.currentSection = "";

    $scope.setSection = function(page){
        $scope.currentSection = page;
    }

    $scope.isActive = function(section){
        var retorno = "";
        //console.log(section+" == "+$scope.currentSection);
        if(section == $scope.currentSection){
            retorno = 'flex-active';
        }
        return retorno;
    }

    $scope.changeLan = function(lg){
        $scope.appData = null;
        dataResume.changeLanguage(lg,function(results) {
            $scope.init();
        });
    }

    $scope.checkLanguage = function(lg){
        if($scope.appData.profile.language != lg){
            return "visible";
        } else {
            return "hidden";
        }
    }

    $scope.init = function(){
        dataResume.getSample(function(results) {
            $scope.appData = results;
        });
    };
    $scope.init();
}