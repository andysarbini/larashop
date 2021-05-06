@extends('layouts.global')

@section('title') Create book @endsection

@section('content')

    <div class="row">
        <div class="col-md-8">

        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif

            <form action="{{route('books.store')}}"               
                enctype="multipart/form-data"
                class="shadow-sm p-3 bg-white"
                method="POST">
            @csrf

            <label for="title">Title</label><br>    
            <input type="text"
                class="cari form-control"
                name="title">
            <br>

            <label for="cover">Cover</label><br>
            <input type="file"
                class="form-control"
                name="cover">
            <br>

            <label for="description">Description</label><br>
                <textarea name="description" 
                    id="description"
                    class="form-control"
                    placeholder="Give a descrition about this book" cols="30" rows="10"></textarea>
                <br>

            <label for="categories">Categories</label><br>
                <select name="categories[]" 
                    multiple
                    id="categories"                    
                    class="form-control">                   
                </select>
            <br><br>

            <label for="stock">Stock</label><br>
            <input type="number"
                class="form-control"
                id="stock"
                name="stock"
                min=0
                value=0>
            <br>

            <label for="author">Author</label><br>
                <input type="text"
                    class="form-control"
                    name="author"
                    id="author"
                    placeholder="Book author">
            <br>

            <label for="publisher">Publisher</label><br>
                <input type="text"
                class="form-control"
                name="publisher"
                id="publisher"
                placeholder="Book publisher">
            <br>

            <label for="price">Price</label><br>
                <input type="number"
                    class="form-control"
                    name="price"
                    id="price"
                    placeholder="Book price">
            <br>

            <button class="btn btn-primary"
                name="save_action"
                value="PUBLISH">Publish</button>

            <button class="btn btn-secondary"
                name="save_action"
                value="DRAFT">Save as draft</button>
            </form>
        </div>
    </div>

@endsection

@section('footer-scripts')
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- <script src="{{ asset('/public/js/jquery-3.1.1.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- <script src="{{ asset('/public/js/bootstrap-tagsinput.js') }}"></script> -->
    
    <script>   
        $('#categories').select2({
            ajax: {
                url: 'http://localhost/larashop/ajax/categories/search',
                processResults: function(data){
                    return {
                        results: data.map(function(item){return {id: item.id, text: item.name} })
                    }
                }
            }
        });
    </script>            
@endsection

 