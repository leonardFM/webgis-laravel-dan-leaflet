@extends('layout.layout')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('warehouse.add') }}" method="post">
                @csrf    
                    <div class="form-group">
                        <label for="category">Nama Gudang</label>
                        <input type="text" name="name_warehouse" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="category">Kota</label>
                        <input type="text" name="city" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                        <label for="category">Lokasi</label>
                        <input type="text" name="location" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                        <label for="category">Latitude</label>
                        <input type="text" name="latitude" id="latitude" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                        <label for="category">Longitude</label>
                        <input type="text" name="longitude" id="longitude" class="form-control form-control-sm">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div id="map" style="height: 500px;;"></div>
    </div>

    <script>

        var coordinated = [0,0];

        if (coordinated[0] == 0 && coordinated[1] == 0) {
            coordinated = [-6.861085, 107.612457];
        }

        var map = L.map('map').setView([-6.861085, 107.612457], 8);
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map); 
        
        //poligon geojson 
        $.getJSON('/geojson/jawa-barat.geojson', function(data) {
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

        map.attributionControl.setPrefix(false);

        var marker = new L.marker(coordinated, {draggable: 'true'});

        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {draggable: 'true'}).bindPopup(position).update();
            $("#latitude").val(position.lat);
            $("#longitude").val(position.lng).keyup();
        });
        
        $("#latitude,#longitude").change(function()
        {
            var position = [parseInt($("#latitude").val()),parseInt($("#longitude").val())];
            marker.setLatLng(position, {draggable: 'true'}).bindPopup(position).update();
            map.addTo(position);
        });

        map.addLayer(marker);
    </script>
</div>  

@endsection