@extends('layouts.app')
@section('content')
<div class="book">
    <div class="row">
        <div class="col-md-3 ">
            <img width="300" height="400" src="{{ asset('storage/'.$book->image) }}">
        </div>
        <div class="col-md-5 ml-5 ">
            <h2>{{$book->name}}</h2>
            @foreach($book->author as $author)
            <span>{{$author->name}}</span>
            @endforeach
            <div class=text-md-left book-text>
                {{$book->description}}
            </div>

            @if(isset($listings))
            @foreach ($listings as $listing)
            <div class="listing-book">
                    @include('Listing.index',['Listings'=> $listing->id])
            </div>
            @endforeach

            @endif


        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="row">

    </div>
</div>
@endsection
