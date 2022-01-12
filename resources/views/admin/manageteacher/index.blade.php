@extends('admin.template.admin-main');

@section('content')

<div class="card-header">
        <h5>Data Guru</h5>
        <a href="/manageteacher/create" class="btn btn-success" type="button" data-bs-toggle="tooltip" title="" data-bs-original-title="btn btn-success" data-original-title="btn btn-success">Guru Baru</a>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Pengajar</th>

            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
              @foreach ($teachers   as $teacher)


            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $teacher->name }}</td>
            <td>gurubaik@gmail.com</td>
            <td>{{ $teacher->matpel->aka }}</td>
            <td>Admin</td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>

@endsection
