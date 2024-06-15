@extends('layouts.main')
@section('title', 'Form Edit Equipment')
@section('deepta')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            {{-- FORM EDIT EQUIPMENT --}}
            <form action="/update/{{ $eq->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Jenis_Sport</label>
                    <select name="Jenis_Sport" class="form-control" required>
                        <option value="">--Pilih Jenis Sport--</option>
                        <option value="Barbel"{{ ($eq->Jenis_Sport == "Barbel") ? " selected" : "" }}>Barbel</option>
                        <option value="Weight"{{ ($eq->Jenis_Sport == "Weight") ? " selected" : "" }}>Weight</option>
                        <option value="Pull Up"{{ ($eq->Jenis_Sport == "Pull Up") ? " selected" : "" }}>Pull Up</option>
                        <option value="Mattres"{{ ($eq->Jenis_Sport == "Mattres") ? " selected" : "" }}>Mattres</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" class="form-control" value="{{ $eq->Nama }}" required>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <input type="text" name="Brand" class="form-control" value="{{ $eq->Brand }}" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="Deskripsi" class="form-control" rows="3" required>{{ $eq->Deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label>poster</label>
                    <input type="file" name="poster" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                    <img src="{{ asset('/storage/'.$eq->poster) }}" alt="{{ $eq->poster }}" height="100" width="80">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </form>
        </div>
    </div>
@endsection
