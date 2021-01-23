@extends('layouts.app')

@section('content')
<div class="hospitalPart">
    @foreach ($hospitals as $hospital)
        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="{{$hospital->image}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title blue">{{$hospital->name}}</h5>
            <p class="card-text">
                <img src="asset/icon/place.png" alt="" class="locationIcon"> {{$hospital->address}}
                <br>
                <img src="/asset/icon/star.png" alt="" class="locationIcon"> {{$hospital->rating}} 
            </p>
            <a href="/hospital/{{$hospital->id}}" class="btn btn-primary">View Details  →</a>
            </div>
        </div>                           
    @endforeach

</div>
@endsection
