@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #0088e0;color:white;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2>Halo {{ Auth::user()->name }}</h2>
                    <p>Selamat Datang</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection