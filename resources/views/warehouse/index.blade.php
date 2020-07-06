@extends('layout.layout')
@section('content')


    <div class="card">
        <div class="card-body">
            <a href="/warehouse/add" class="btn btn-primary btn-sm mb-3" style="float: right">Add Data</a>
            <table id="table_id" class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gudang</th>
                        <th>Kota</th>
                        <th>Lokasi</th>
                        <th>Latitude</th>
                        <th>Longitude</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($data as $row)
                    <?php $no++; ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $row->name_warehouse }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->location }}</td>
                            <td>{{ $row->latitude }}</td>
                            <td>{{ $row->longitude }}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>


@endsection