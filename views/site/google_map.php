<div class="google-maps well" align="center" style="height: 400px">
        <?php

//google map
        use dosamigos\google\maps\LatLng;
        use dosamigos\google\maps\services\DirectionsWayPoint;
        use dosamigos\google\maps\services\TravelMode;
        use dosamigos\google\maps\overlays\PolylineOptions;
        use dosamigos\google\maps\services\DirectionsRenderer;
        use dosamigos\google\maps\services\DirectionsService;
        use dosamigos\google\maps\overlays\InfoWindow;
        use dosamigos\google\maps\overlays\Marker;
        use dosamigos\google\maps\Map;
        use dosamigos\google\maps\services\DirectionsRequest;
        use dosamigos\google\maps\overlays\Polygon;
        use dosamigos\google\maps\layers\BicyclingLayer;

$coord = new LatLng(['lat' => 17.233026, 'lng' => 98.236173]);
        $map = new Map([
            'center' => $coord,
            'zoom' => 15,
            'height' => 360
        ]);

// lets use the directions renderer
        $home = new LatLng(['lat' => 17.233026, 'lng' => 98.236173]);

// Lets add a marker now
        $marker = new Marker([
            'position' => $coord,
            'title' => 'My Home Town',
        ]);

// Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
                new InfoWindow([
            'content' => '<p>สำนักงานสาธารณสุขอำเภอท่าสองยาง</p>'
                ])
        );

// Add marker to the map
        $map->addOverlay($marker);

// Display the map -finally :)
        echo $map->display();
        ?>
</div>
