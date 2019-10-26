@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listing index</h1>
                {{dd($listing)}}
            </div>
        </div>
    </div>
@endsection