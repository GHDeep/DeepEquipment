@extends('layouts.main')
@section('title', 'Form Add Equipment')
@section('deepta')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            {{-- FORM ADD EQUIPMENT --}}
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Jenis Sport</label>
                    <select name="Jenis_Sport" class="form-control" required>
                        <option value="">--Pilih Jenis Sport--</option>
                        <option value="Barbel">Barbel</option>
                        <option value="Barbel">Cardio</option>
                        <option value="Weight">Weight</option>
                        <option value="Pull Up">Pull Up</option>
                        <option value="Mattres">Mattres</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <input type="text" name="Brand" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="Deskripsi" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" name="poster" class="form-control-file" accept="image/*">
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>   
            </form>
        </div>
    </div>
@endsection
