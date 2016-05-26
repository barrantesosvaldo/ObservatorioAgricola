<div ng-controller="geoportalController">

    <map-canvas id="map" ng-model="markers">
        <map-canvas ng-repeat="marker in markers" coords="m.coords" icon="m.icon" idkey="m.id"></map-canvas>
    </map-canvas>

    <ui-gmap-google-map center="map.center" zoom="map.zoom" draggable="true" events="map.events">
        <ui-gmap-marker ng-repeat="m in map.markers" coords="m.coords" icon="m.icon" idkey="m.id"></ui-gmap-marker>
    </ui-gmap-google-map>

</div>