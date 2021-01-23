@extends('layouts.app')
<link href="{{ asset('css/detailhospital.css') }}" rel="stylesheet">
<style>
    h1{
        font-size: 3.4rem !important;
        padding-right: 12vw;
        letter-spacing: 1px;
    }
    h2{
        padding-right: 12vw;
        letter-spacing: 1px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }

    .hospitalContainer{
        margin: 0;
        margin-bottom: 10vh;
    }
</style>
<title>{{$data->name}}</title>
@section('content')
    <div class="hospitalContainer bgBrown"  data-aos="fade-up">
        <div class="hospitalDetail">
            <h1 class="headerFont brown">{{$data->name}}</h3>
            <hr><br>
            <p><img src="/asset/icon/star.png" alt="" class="locationIcon"> {{$data->rating}}</p>
            <p><img src="/asset/icon/place.png" alt="" class="locationIcon">  {{$data->address}}</p>
            <p><img src="/asset/icon/phone.png" alt="" class="locationIcon">  {{$data->phone}}</p>    
        </div>
        <div class="hospitalContainerImg">
            <img src="../{{$data->image}}" class="hospitalImg">
        </div>
    </div>
    <div class="doctor">
        <h2 class="headerFont bluepurple"  data-aos="fade-up">Doctors Available</h2>
        @foreach($doctor as $d)
            <div class="doctorContainer" data-aos="fade-up">
                <div class="doctorImgContainer">
                    <img src="{{asset('asset/doctors.png')}}" alt="" class="doctorImg"> 
                </div>
                <div class="doctorDetail">
                    <h3 style="font-weight:bold;font-size:1.35rem" class="brown">dr. {{$d->name}}</h3>
                    <p class="detail">
                        Specialist {{$d->specialist}}<br>
                        Age: {{$d->age}} years<br>
                        <img src="/asset/icon/star.png" alt="" class="locationIcon"> {{$d->rating}} <br>
                        <img src="/asset/icon/coin.png" alt="" class="locationIcon"> Rp{{$d->fee}},00<br>
                    </p>
                    <a href="/doctor/{{$d->id}}" class="btn btn-primary">View Profile</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection