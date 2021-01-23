@extends('layouts.app')
<link href="{{ asset('css/allhospital.css') }}" rel="stylesheet">
<style>
    .container{
        padding: 5vh 10vw !important;
    }
</style>
@section('content')
    <div class="container">
        <h2 class="headerFont darkpurple">All Hospitals in Jakarta</h2>
        <div class="hospitalPart" data-aos="fade-up" style="margin-bottom: 1vh">
            @foreach($hospitals as $hospital)
                <div class="card" style="width: 25%;">
                    <img class="card-img-top" src="/{{$hospital->image}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$hospital->name}}</h5>
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
    {{$hospitals -> links()}}
    </div>
@endsection