app.controller('geoportalController', function($scope, $http, API_URL, $interval/*, uiGmapGoogleMapApi, uiGmapIsReady*/) {


    //devuelve la lista de precios 
    /*$http.get(API_URL + "precios").success(function(response) {
        $scope.precios = response;

        $scope.addMarker(9.917151, -84.0034567);
    });


	$scope.map = { center: { latitude: 45, longitude: -73 }, zoom: 8 };*/

	// marcadores
	/*$scope.markers = [];

	$scope.id = 0;*/

	// genera marcadores
	/*$scope.addMarker = function (latitude, longitude) {

        $scope.markers.push({
            latitude: parseFloat(latitude),
            longitude: parseFloat(longitude)
        });

        console.log('Maker add: ' + $scope.markers);
    }; */

    angular.extend($scope, {
        map: {
            center: {
                latitude: 42.3349940452867,
                longitude:-71.0353168884369
            },
            zoom: 11,
            markers: [],
            events: {
            click: function (map, eventName, originalEventArgs) {
                var e = originalEventArgs[0];
                var lat = e.latLng.lat(),lon = e.latLng.lng();
                var marker = {
                    id: Date.now(),
                    coords: {
                        latitude: lat,
                        longitude: lon
                    }
                };
                $scope.map.markers.push(marker);
                console.log($scope.map.markers);
                $scope.$apply();
            }
        }
        }
    });



});