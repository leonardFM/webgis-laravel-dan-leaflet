@extends('layout.layout')
@section('content')

    <div id="map" style="height: 500px;;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

<script>
    var map = L.map('map').setView([-6.861085, 107.612457], 9);
    var data = <?php echo $data ?>;
    
    // map
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map); 
    
    //poligon geojson 
    $.getJSON('/geojson/kota.geojson', function(data) {
        geoLayer = L.geoJson(data, {
            style: function(feature) {
                return {
                    opacity: 0.5,
                    color: 'green',
                    fillcolor: 'green'
                }
            },
        }).addTo(map); 
    });

    // show marker
    data.forEach(function (element) {
        var x = element.prop1 + 2;
        L.marker([ element.latitude ,  element.longitude ]).addTo(map).bindPopup(element.city + "<br>" + element.location).openPopup();    
    });
  
   

    
</script>
@endsection
    
