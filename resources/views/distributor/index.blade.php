@extends('layout.layout')
@section('content')


    <div class="card">
        <div class="card-body">
            <a href="/distributor/map" class="btn btn-success btn-sm mb-3"><i class="fas fa-map-marked-alt"></i></a>
            <a href="/distributor/add" class="btn btn-primary btn-sm mb-3" style="float: right">Add Data</a>
            <table id="table_id" class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama distributor</th>
                        <th>Kota</th>
                        <th>Lokasi</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th style="width: 150px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($data as $row)
                    <?php $no++; ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $row->name_distributor }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->location }}</td>
                            <td>{{ $row->latitude }}</td>
                            <td>{{ $row->longitude }}</td>
                            <td class="text-center">
                                <a href="/distributor/edit/{{ $row->id }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>


@endsection