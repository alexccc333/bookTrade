@extends('layouts.app')
@section('content')
    <div class="row">
    @foreach($books as $book)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="{{route('book.show',['book'=>$book->id])}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection