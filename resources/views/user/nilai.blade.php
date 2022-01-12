@extends('admin.template.admin-main')


@section('content')

<div class="card-header">
    <h5>Nilai Ujian {{ auth()->user()->name }}</h5>
  </div>
<div class="table-responsive">
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Matpel</th>
        <th scope="col">PTS 1</th>
        <th scope="col">PAS 1</th>
        <th scope="col">PTS 2</th>
        <th scope="col">PAS 2</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($ujian as $nilai)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $nilai->matpel->name }}</td>
            <td>{{ $nilai->pts_1 }}</td>
            <td>{{ $nilai->pas_1 }}</td>
            <td>{{ $nilai->pts_2 }}</td>
            <td>{{ $nilai->pas_2 }}</td>
            
    
            </tr>
            
        @endforeach

      
            
    

    </tbody>
    </table>
</div>


@endsection
