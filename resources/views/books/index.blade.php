@extends('layouts.global')

@section('title') Books list @endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th><b>Cover</th>
                        <th><b>Title</th>
                        <th><b>Author</th>
                        <th><b>Status</th>
                        <th><b>Categories</th>
                        <th><br>Stock</th>
                        <th><br>Price</th>
                        <th><br>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>
                            <img src="{{asset('storage/' . $book->cover)}}" width="96px" alt="">
                    @endif
                        </td>
                        <td>
                            {{$book->title}}
                        </td>
                        <td>
                            {{$book->author}}
                        </td>
                        <td>
                            @if($book->status == "DRAFT")
                                <span class="badge bg-dark text-white">{{$book->status}}</span>
                            @else
                                <span class="badge badge-success">{{$book->status}}</span>
                            @endif
                        </td>
                        <td>
                            <ul class="pl-3">
                                @foreach($book->categories as $category)
                                    <li>{{$category->name}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{$book->stock}}</td>
                        <td>{{$book->price}}</td>
                        <td>[TODO: actions]</td>
                    </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            {{$books->appends(Request::all())->links()}}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @endsection