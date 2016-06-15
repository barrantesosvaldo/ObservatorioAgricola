var map;
var markers = [];

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: new google.maps.LatLng(9.917151, -84.0034567)
    });
}

function addMarker(location, name) {
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: name
  });
  markers.push(marker);
}

window.parent.setMarkers = function(id) {
    var id =  window.parent.document.getElementById("slGProducto").value;

    $.ajax({
        url: "http://localhost/observatorio-agricola/public/api/v1/precios/ubicacion-precios/"+id,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log(response);
            addMarker(new google.maps.LatLng(9.777777, -84.0034567), "Marker 1");
            addMarker(new google.maps.LatLng(9.999999, -84.0034567), "Marker 2");
            addMarker(new google.maps.LatLng(10.111111, -84.0034567), "Marker 3");
            addMarker(new google.maps.LatLng(10.333333, -84.0034567), "Marker 4");
        },
        error: function(error) {
            alert("Error en la llamada");
        }
    });
}

window.parent.removeMarkers = function() {

    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers = [];
}