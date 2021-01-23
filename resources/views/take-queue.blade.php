@extends('layouts.app')
<link href="{{ asset('css/queue.css') }}" rel="stylesheet">

@section('content')
<h2 class="header">Queue</h2>
    <div class="container">
        <div class="w-50">
            <img src="" alt="" class="queueImg">Gambar queue
        </div>
        <div class="">
            <h4>Current queue number is :</h4>
            <h1>005</h1>
            <button class="btn">Take your queue</button>
        </div>
    </div>

@endsection