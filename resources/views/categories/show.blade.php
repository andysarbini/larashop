@extends('layouts.global')

@section('title') Detail Category @endsection

@section('content')

    <div class="col-md-8">

    @if(session('status'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    {{session('status')}}
                </div>
            </div>
        </div>
    @endif
    
        <div class="card">
            <div class="card-body">
                <label for=""><b>Category name</b></label><br>
                {{$category->name}}
                <br><br>

                <label for=""><b>Category slug</b></label><br>
                {{$category->slug}}
                <br><br>

                <label for=""><b>Category image</b></label><br>
                @if($category->image)
                    <img src="{{asset('public/storage/' . $category->image)}}" alt="" width="120px">
                @endif
            </div>
        </div>
    </div>

@endsection