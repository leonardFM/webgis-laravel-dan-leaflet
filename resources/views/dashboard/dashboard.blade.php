@extends('layout.layout')
@section('content')

<div class="container">
    <div id="map" style="height: 600px;;"></div>
</div>



{{-- routing --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

<script>
    var map = L.map('map').setView([-6.861085, 107.612457], 8.5);


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

    var lokasiSaya = L.marker([-6.362002, 106.875549]).addTo(map).bindPopup("Lokasi Saya").openPopup();
    var lokasiSukabumi = L.marker([-6.930196, 106.929497]).addTo(map).bindPopup('Lokasi Tujuan Kedua').openPopup();
    var lokasiBandung = L.marker([-6.919634, 107.617233]).addTo(map).bindPopup('Lokasi Tujuan Pertama').openPopup();
    var lokasiTasikmalaya = L.marker([-7.358955, 108.221763]).addTo(map).bindPopup('Lokasi Tujuan Ketiga').openPopup();

    L.Routing.control({
    waypoints: [
        L.latLng(-6.362002, 106.875549),
        L.latLng(-6.930196, 106.929497),
        L.latLng(-6.919634, 107.617233),
        L.latLng(-7.358955, 108.221763),
        L.latLng(-6.362002, 106.875549)
    ]
    }).addTo(map);

    
</script>
</div>
@endsection
    
