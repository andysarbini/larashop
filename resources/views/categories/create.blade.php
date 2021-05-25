@extends('layouts.global')

@section('title') Create Category @endsection

@section('content')
    <div class="col-md-8">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif

        <form action="{{route('categories.store')}}"
            enctype="multipart/form-data"
            class="bg-white shadow-sm p-3"
            method="POST">

            @csrf

            <label for="">Category name</label><br>
                <input type="text"
                    class="form-control {{$errors->first('name') ? "is-invalid" : ""}}"
                    vlaue="{{old('name')}}"
                    name="name">
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                <br>

            <label for="">Category image</label>
                <input type="file"
                    class="form-control {{$errors->first('image') ? "is-invalid" : ""}}"
                    name="image">
                    <div class="invalid-feedback">
                        {{$errors->first('image')}}
                    </div>
                <br>

            <input type="submit"
                class="btn btn-primary"
                value="Save"
                >
        </form>
    </div>
@endsection