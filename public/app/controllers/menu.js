app.controller('menuController', function($scope, $location) {
	$scope.setRoute = function(route) {
		$location.path(route);
	}
});