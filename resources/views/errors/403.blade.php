@extends('layouts.app')

@section('content')
<div class="d-flex flex-row justify-content-center">
    <div class="col-md-6 text-center">
        <div class="alert alert-danger">
            <h1>403</h1>
            <!-- cara untuk mengakses pesan yang kita isikan sbg parameter kedua di method -->
            <h4>{{$exception->getMessage()}}</h4>
        </div>
    </div>
</div>

@endsection
