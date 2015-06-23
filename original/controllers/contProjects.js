/**
 * Created by fernando on 9/06/14.
 */
controllers.contProjects = function($scope,$route, $routeParams,dataResume){
    $scope.project = null
 //   $scope.project.images[0] = "hola";
    $scope.projectTitle = $routeParams.title;
    $scope.contact = {url:"/data/sendMail.php"};


    $scope.init = function(){

        dataResume.getProjectDetail( $scope.projectTitle,function(results) {
            $scope.project = results;
        });
    };
    $scope.init();
}