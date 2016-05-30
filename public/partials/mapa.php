<!DOCTYPE html>
<html lang="es-CR">

  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <style>
    	html, body {
        	height: 100vh%;
        	margin: 0;
        	padding: 0;
      	}
      	
      	#map {
        	height: 100vh;
      	}
    </style>
  </head>

  <body>
  	<div id="map"></div>

  	<script>

		function initMap() {
			var myLatLng = new google.maps.LatLng(9.917151, -84.0034567);

			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 8,
				center: myLatLng
  			});
		}



  		var marker = new google.maps.Marker({
  			position: new google.maps.LatLng(9.917151, -84.0034567),
		    map: map,
		    title: 'Hello World!'
		});

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDihPvCpofzqkHdrpmnYJvEg6ndxEUFMPk&signed_in=true&callback=initMap">
    </script>
  </body>
</html>