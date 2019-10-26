@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listing index</h1>
            </div>
        </div>
        @if (Illuminate\Support\Facades\Auth::check())
        <div class="row">
            <div class="col-md-12">
            <a href="{{route('message.create',['listing' => $listing])}}">
                    <button class="btn btn-success" type="button">Собщение</button>
                </a>
            </div>
        </div>
        @else
            <h3>Чтобы написать Собщение пользователю авторизуйтесь</h3>
        @endif
    </div>
    {{-- {{dd($listing)}} --}}
@endsection
