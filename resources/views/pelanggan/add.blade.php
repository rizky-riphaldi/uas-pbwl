@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Tambah Data</h3>
            <hr>
            <form method="POST" action="{{url('/pelanggan')}}">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control col-4" name="nama">
                </div>
                <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" class="form-control col-2" name="no_hp">
                </div>
                <button type="submit" class="btn" style="background-color: #0088e0; color:white;">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection