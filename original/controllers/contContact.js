/**
 * Created by Fernando on 25/08/14.
 */
controllers.contContact =  function($scope,$route, $routeParams,$timeout, $log, dataResume){
   // google.maps.visualRefresh = true;
    $scope.contact = {url:"/data/sendMail.php"};
    google.maps.visualRefresh = true;

    angular.extend($scope, {
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
                $scope.map.control.getGMap().setZoom(14);
                $scope.map.control.refresh(origCenter);

               // alert("refresh");
            }
        }
    });



    $scope.refreshMap = function () {
        //optional param if you want to refresh you can pass null undefined or false or empty arg
        $scope.map.control.refresh({latitude: $scope.map.center.latitude, longitude: $scope.map.center.longitude});
        //$scope.map.control.getGMap().setZoom(14);
       // $scope.zoomMap();
    };

    $scope.zoomMap = function () {
        $scope.map.control.getGMap().setZoom(14);
    }

    var markerToClose = null;


    $timeout(function () {
        var dynamicMarkers = [
            {
                id: 3,
                icon: '/images/home-map.png',
                latitude: $scope.map.center.latitude, longitude: $scope.map.center.longitude
            }
        ];
        _.each(dynamicMarkers, function (marker) {
            marker.closeClick = function () {
                marker.showWindow = false;
                $scope.$apply();
            };
            marker.onClicked = function () {
                $scope.onMarkerClicked(marker);
            };
        });
        $scope.map.dynamicMarkers = dynamicMarkers;
        $scope.refreshMap();
    }, 1000);

    $timeout(function () {

        $scope.zoomMap();
    }, 1500);


    $timeout(function () {

        $scope.zoomMap();
    }, 4000);
    var origCenter = {latitude: $scope.map.center.latitude, longitude: $scope.map.center.longitude};
}