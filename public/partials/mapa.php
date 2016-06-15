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

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDihPvCpofzqkHdrpmnYJvEg6ndxEUFMPk&callback=initMap">
    </script>
    <script src="http://localhost/observatorio-agricola/public/app/controllers/mapa.js"></script>
    <script src="http://localhost/observatorio-agricola/public/js/jquery.min.js"></script>
  </body>
</html>