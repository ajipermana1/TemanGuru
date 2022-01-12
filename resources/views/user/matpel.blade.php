@extends('admin.template.admin-main');

@section('content')

<div class="card-header">
        <h5>Mata Pelajaran {{ auth()->user()->kelas->name }}</h5>
      </div>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nama Guru</th>
         
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusan as $j)
            @foreach ($j->matpels as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->guru->name }}</td>
             
                </tr>
                
            @endforeach
        
                
             
                    
                
        
           
            @endforeach
           
        </tbody>
        </table>
    </div>

@endsection
