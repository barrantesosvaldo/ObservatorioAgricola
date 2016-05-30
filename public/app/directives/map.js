app.directive('mapCanvas', function() {
    return {
        restrict: 'E',
        link: function(scope, element) {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(9.917151, -84.0034567)
            };

            new google.maps.Map(element[0], mapOptions);

        }
    };
});