@extends('layouts.app')
<link href="{{ asset('css/queue.css') }}" rel="stylesheet">
<style>
    .title{
        font-size: 3rem !important;
    }
</style>
<title>Queue</title>

@section('content')
<h2 class="header title headerFont purple"  data-aos="fade-up">Queue</h2>
    <div class="container">
        <div class="w-50"  data-aos="zoom-in">
            <img src="/asset/queue.png" alt="" class="queueImg">
        </div>
        @if ($users=="[]")
        <div data-aos="fade-left">
            <h4>You don't have any queue</h4>
            <br>
            <a href="/hospital" class="btn btn-primary">Take Queue →</a>
        </div>
        @else
        <div class="" data-aos="fade-left">
            <h4>Current queue number is :</h4>
            <h1>{{$cur->queue_number}}</h1>
            <h4>Your queue number is :</h4>
            <h1>{{$user->queue_number}}</h1>
            <h4>Estimated time is: </h3>
            <h2>{{$esti}} Minutes</h2>
        </div>
        @endif
    </div>

@endsection