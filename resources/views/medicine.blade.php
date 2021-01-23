@extends('layouts.app')
{{-- <link href="{{ asset('css/queue.css') }}" rel="stylesheet"> --}}

@section('content')
<h2 class="header text-center">Medicine</h2>
    <div class="">
        <div class="w-50">
            {{-- <img src="/asset/queue.png" alt="" class="registerImg"> --}}
        </div>
        <a href="/cart/{{Auth::user()->id}}">My Cart</a>
        <div class="" data-aos="fade-up" style="margin-bottom: 1vh" style="display:flex; flex-wrap: wrap;">
            @foreach ($med as $m)
                <div class="card" style="width: 25%;">
                    <div class="card-body">
                        {{-- <img src="{{$m->image}}"> --}}
                        <h5 class="card-title">{{$m->name}}</h5>
                        <h5 class="card-title">{{$m->type}}</h5>
                        <h5 class="card-title">{{$m->desc}}</h5>
                        <h5 class="card-title">Rp. {{$m->price}},00</h5>
                        <form method="POST" action="/addcart/{{$m->id}}">
                            @csrf
                            <div class="form-group row">
                                <label for="qty" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                <div class="col-md-6">
                                    <input id="qty" type="text" class="form-control" name="qty" value="{{ old('qty') }}">
                                </div>
                            </div>
                            
                            <div class="FormRegBtn">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                           
            @endforeach
        </div>
    </div>

@endsection