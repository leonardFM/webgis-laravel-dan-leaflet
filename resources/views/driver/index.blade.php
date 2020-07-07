@extends('layout.layout')
@section('content')


    <div class="card">
        <div class="card-body">
            <a href="/driver/add" class="btn btn-primary btn-sm mb-3" style="float: right">Add Data</a>
            <table id="table_id" class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No KTP</th>
                        <th>No Telepon</th>
                        <th>Tipe Kendaraan</th>
                        <th>Status</th>
                        <th style="width: 150px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($data as $row)
                    <?php $no++; ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->no_ktp }}</td>
                            <td>{{ $row->no_phone }}</td>
                            <td>{{ $row->type_vehicle }}</td>
                            <td>{{ $row->status }}</td>
                            <td class="text-center">
                                <a href="/driver/edit/{{ $row->id }}" class="btn btn-success btn-sm">Edit</a>
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