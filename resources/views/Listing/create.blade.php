@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('listing.store')}}" method="POST" enctype="multipart/form-data">
        @include('Listing._form')
        </form>
    </div>
</div>

@endsection