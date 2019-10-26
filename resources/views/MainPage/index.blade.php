@extends('layouts.app')

@section('content')

    <div class="row slim">
        <div class="col-md-12">
            @include('layouts._message')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    @foreach($genres as $genre)
                        <a class="dropdown-item" href="{{route('BookGenre',['genre'=>$genre->id])}}">{{$genre->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center my-3">
        <div class="row slim">
            <div class="col-md-12">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active">
                            @foreach($books as $book)
                                <div class="col-2 float-left"><a href="{{route('book.show',['book'=>$book->id])}}"><img
                                                class="img-fluid" src="{{ asset('storage/'.$book->image) }}"></a>
                                </div>
                            @endforeach
                        </div>
                        <div class="carousel-item row no-gutters">
                            <div class="col-3 float-left"><img class="img-fluid"
                                                               src="http://placehold.it/350x280?text=5"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection