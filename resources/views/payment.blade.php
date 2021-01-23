@extends('layouts.app')

<style>
    
</style> 
@section('content')
    <link href="{{ asset('css/payment.css') }}" rel="stylesheet">
    <div class="container">
        <div class="imgs">
            <center><img src="/asset/payment.png" alt="illus_image"></center>
        </div>
        <div class="content">
            <div class="header">
                <h2 class="headerFont title darkpurple">Payment Page</h2>
                <h6 class="descFont">Let's finish your payment here!</h6> 
            </div>
            <form action="{{route('paymentInsert', $payments->id)}}" method="POST">
                @csrf
                <p>NAME ON CARD</p>
                <input class="full" type="text" name="cardname">
                <p>CARD NUMBER</p>
                <input class="full" type="text" placeholder="0000-0000-0000-0000" name="cardnumber">
                <div style="display: flex;">
                    <div>
                        <p>EXPIRED DATE</p>
                        <input class="half" type="text" placeholder="MM" name="month">
                        <input class="half" type="text" placeholder="YYYY" name="year">
                    </div>
                    <div>
                        <p>CVC/VV</p>
                        <input class="full" type="text" placeholder="3 or 4 digit number" name="cvcvv">
                    </div>
                </div>
                <div class="payView">
                    <p>Total Billed</p><p class="ml-auto">{{$payments->total}}</p>
                </div>
                
                <center><button type="submit" class="btn btn-primary">Pay</button></center>
            </form>
        </div>
    </div>
@endsection