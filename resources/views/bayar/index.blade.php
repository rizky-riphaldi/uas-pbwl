@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Data Pembayaran</h3>
            <hr>
            <a href="{{url('bayar/create')}}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <table class="table table-hover">
                <thead>
                    <tr style="background-color: #0088e0;color:white;">
                        <th>Nama Pelanggan</th>
                        <th>Jenis bayar</th>
                        <th>Total</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                @foreach($data as $x)
                <tr>
                    <td>{{$x->nama}}</td>
                    <td>{{$x->tarif}}</td>
                    <td>Rp. {{$x->total}}</td>
                    <td class="text-center">
                        <form action="{{url('bayar/'.$x->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            <a href="{{url('bayar/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection