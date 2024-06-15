@extends('layouts.main')

@section('title', 'Equipment')

@section('deepta')
<div class="card">
    <div class="card-header">
        <a href="/equipment/add-form" class="btn btn-primary"><i class="bi bi-plus-square"></i> Equipment</a>  
    </div>
    <div class="card-body">
        @if (session('alert'))

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ session('alert') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                
        @endif
      {{-- Tabel Disini --}}
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Sport</th>
                <th>Nama</th>
                <th>Brand</th>
                <th>Deskripsi</th>
                <th>Poster</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($eq as $idx => $e)
          <tr>
            <td>{{ $idx + 1 }}</td>
            <td>{{ $e->Jenis_Sport }}
            <td>{{ $e->Nama }}</td> 
            <td>{{ $e->Brand }}</td> 
            <td>{{ $e->Deskripsi }}</td> 
            <td>
              <img src="{{ asset('storage/'.$e->poster) }}" 
              alt="{{ $e->poster }}" height="180" width="200">
            </td>
            <td>
              <a href="/equipment/edit-form/{{ $e->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
              <a href="/delete/{{ $e->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
 </div> 
@endsection
