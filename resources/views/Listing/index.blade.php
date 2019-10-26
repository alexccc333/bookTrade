@foreach($listings as $listing)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$listing->name}}</h5>
            <p class="card-text">{{$listing->description}}</p>
            <p class="card-text">{{$listing->price}}</p>
            <a href="{{route('listing.show',['listing'=>$listing])}}" class="btn btn-primary">Go somewhere</a>

        </div>
    </div>
@endforeach