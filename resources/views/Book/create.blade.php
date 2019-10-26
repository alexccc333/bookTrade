@extends('layouts.app')
@section('content')
    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
        @include('Book._form',['genres'=>$genres])
    </form>

@endsection