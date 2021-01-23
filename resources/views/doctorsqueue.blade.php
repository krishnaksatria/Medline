@extends('layouts.app')
<link href="{{ asset('css/doctorsqueue.css') }}" rel="stylesheet">
<title>dr. {{$info->name}} | Spesialis {{$info->specialist}}</title>
@section('content')
    <div class="container">
        <link href="" rel="stylesheet">
        <div class="detaildoctor">
            <div class="doctorImgContainer" data-aos="fade-up">
                <img src="{{asset('asset/doctor.jpg')}}" alt="" class="doctorImg"> 
            </div>
            <div class="doctorDetails"  data-aos="fade-right">
                <h3>dr. {{$info->name}}</h5>
                <p class="doctorInfo">
                    Specialist <span class="specialist">
                        {{$info->specialist}}
                    </span>
                    <br>
                    Age: {{$info->age}} years<br>
                    <img src="/asset/icon/star.png" alt="" class="locationIcon"> {{$info->rating}}<br>
                    <img src="/asset/icon/coin.png" alt="" class="locationIcon"> Rp{{$info->fee}},00<br>
                    <br> 
                    @if($queues=="[]")
                        <h4>Queue: 0</h4>
                    @else
                        <h4>Queue: {{$data->queue_number}}</h4>
                    @endif
                    <br>

                    <a href="/getQueue/{{$info->id}}" class="btn btn-primary">Take Queue</a>
                </p>
            </div>                
        </div>
    </div>

@endsection