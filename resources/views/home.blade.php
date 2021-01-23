@extends('layouts.app')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<title>Home</title>
<style>
    .card-group{
        justify-content: space-evenly !important;
        align-items: center !important;
        text-align: justify !important;
    }
    .serviceCard{
        max-width: 25% !important;
        max-height: 300px;
        height: 55vh;
        /* border: 1px solid rgba(0, 0, 0, 0.125) !important; */
        border: none !important;
    }
    .card-text{
        font-size: .75rem !important;

    }
    .serviceIcon{
        max-width: 30% !important;
        margin-bottom: 5px;
    }
</style>
@section('content')
<div>
    @guest
        <div class="tes">
            <div class="tes1" data-aos="fade-up">
                <h1 class="headerFont purple"><span class="darkpurple">Your health</span> is <span class="darkpurple">our</span> priority</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus sed, temporibus voluptas, dolor, vitae eaque laborum provident quasi dolorum sint cumque eligendi quas! Recusandae vitae magnam nihil ea excepturi.</p>
                <br>
                <a href="/hospital" class="btn btn-primary">Take Queue</a>

            </div>
            <div class="tes2" data-aos="fade-up"> 
                {{-- gambar --}}
                <img src="{{asset('asset/doctorrr.png')}}" alt="" class="image center"> 
            </div>
        </div>
        <div class="about">
            <div class="about1" data-aos="fade-up">
                <img src="/asset/logo 2.png" alt="" style="width: 250px;  height: 250px;">
            </div>
            <div class="about2" data-aos="fade-up">
                <h2 class="headerFont brown">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dicta optio aut non, nemo nam tenetur? Praesentium enim qui, ad tempore asperiores libero, odio deserunt officia laboriosam illum in. Assumenda?</p>
            </div>
        </div>
        <div class="services">
            <div class="services1" >
                <h2 class="headerFont purple" data-aos="zoom-in">Our Services</h2>
                <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nam! Porro eveniet reprehenderit harum, atque repellendus tempora accusamus inventore. Voluptatibus, animi. Iste quam labore totam. Sit architecto magni harum quos.</p>
            </div>
            <div class="card-group">
                <div class="card serviceCard" data-aos="fade-right">
                  {{-- <div class="card-body">
                    <img class="card-img-top serviceIcon center" src="/asset/icon/icon-hospital.png" alt="Card image cap">
                    <h4 class="card-title">View Hospitals</h4>
                    <p class="card-text" style="height: 50%;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit impedit iste in, cupiditate vitae corporis laborum enim voluptatibus, rem possimus quaerat earum necessitatibus, beatae reiciendis ducimus esse nostrum neque iure.</p>
                    <a href="/hospital" class="btn btn-primary">Take Queue</a>

                  </div> --}}
                  <div class="card-body">
                    <img class="card-img-top serviceIcon center" src="/asset/icon/icon-hospital.png" alt="Card image cap">                <h4 class="card-title">View Hospitals</h4>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit impedit iste in, cupiditate vitae corporis laborum enim voluptatibus, rem possimus quaerat earum necessitatibus, beatae reiciendis ducimus esse nostrum neque iure.</p>
                    <a href="/hospital" class="btn btn-primary">Take Queue</a>
                </div>
                </div>
                <div class="card serviceCard" data-aos="fade-up">
                    <div class="card-body">
                        <img class="card-img-top serviceIcon center" src="/asset/icon/icon-queue.png" alt="Card image cap">                <h4 class="card-title">Take Queues</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit impedit iste in, cupiditate vitae corporis laborum enim voluptatibus, rem possimus quaerat earum necessitatibus, beatae reiciendis ducimus esse nostrum neque iure.</p>
                        <a href="/hospital" class="btn btn-primary">Take Queue</a>
                    </div>
                </div>
                <div class="card serviceCard">
                  <div class="card-body"data-aos="fade-left">
                    <img class="card-img-top serviceIcon center" src="/asset/icon/icon-medicine.png" alt="Card image cap">
                    <h4 class="card-title">Medicines</h4>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate ex dolore excepturi animi ea aliquid ducimus. Vero dolore et error, labore fuga enim nam perferendis voluptatibus eveniet veniam tempora numquam?</p>
                    <a href="/hospital" class="btn btn-primary">Take Queue</a>
                </div>
                </div>
              </div>
        </div>
        <div class="steps">
            <div class="steps1" data-aos="zoom-in">
                <img src="{{asset('asset/welcome-queue.png')}}" alt="" class="image center" style="width:500px"> 
            </div>
            <div class="about2">
                <h2 class="headerFont brown" data-aos="fade-right">How to Queue</h2>
                
                <p data-aos="fade-up"> <span class="circle">‎‎‎‎ ‎ ‎1. </span>  ‎ Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                    <span class="circle">‎‎‎‎ ‎ ‎2. </span>  ‎ Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    <br>
                    <span class="circle">‎‎‎‎ ‎ ‎3. </span>  ‎ Neque, culpa, possimus nostrum blanditiis quod voluptatem eius, cumque fugiat inventore vel architecto?
                    <br>
                    <span class="circle">‎‎‎‎ ‎ ‎4. </span>  ‎ Done
                </p>

            </div>
        </div>
    @else
    {{-- <div class="container"> --}}
        <div style="margin-top: 5vh;margin-left: 10vw;">
            <h1 class="darkpurple descFont title" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="1000">Hello, <span style="font-weight:bold" class="headerFont">{{Auth::user()->name}}!</span></h1><br>
        </div>
        <div class="image1">
            <img src="/asset/remon/1.jpg" style="width:100%">
        </div>
        <div style="display:flex; margin-bottom:5vh;">
            <a style="width:25%" href="/hospital"><img src="/asset/remon/2.jpg" style="width:100%"></a>
            <a style="width:25%" href="/queue/{{Auth::user()->id}}"><img src="/asset/remon/3.jpg"style="width:100%"></a>
            <a style="width:25%" href="/medicine"><img src="/asset/remon/4.jpg"style="width:100%"></a>
            <a style="width:25%" href="/register"><img src="/asset/remon/5.jpg"style="width:100%"></a>
        </div>
    
    {{-- </div> --}}
    @endguest
    {{-- @guest
        <div>
            <h1 class="darkpurple descFont title" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="1000">Hello, <span style="font-weight:bold" class="headerFont">Guest!</span></h1><br>
        </div>
        <div class="image1">
            <img src="/asset/remon/1.jpg" style="width:100%">
        </div>
        <div style="display:flex;">
            <a style="width:25%" href=""><img src="/asset/remon/2.jpg" style="width:100%"></a>
            <a style="width:25%" href=""><img src="/asset/remon/3.jpg"style="width:100%"></a>
            <a style="width:25%" href=""><img src="/asset/remon/4.jpg"style="width:100%"></a>
            <a style="width:25%" href="/register"><img src="/asset/remon/5.jpg"style="width:100%"></a>
        </div>
    @else
        <div>
            <h1 class="darkpurple descFont title" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="1000">Hello, <span style="font-weight:bold" class="headerFont">{{Auth::user()->name}}!</span></h1><br>
        </div>
        <div class="image1">
            <img src="/asset/remon/1.jpg" style="width:100%">
        </div>
        <div style="display:flex;">
            <a style="width:25%" href="/hospital"><img src="/asset/remon/2.jpg" style="width:100%"></a>
            <a style="width:25%" href="/queue/{{Auth::user()->id}}"><img src="/asset/remon/3.jpg"style="width:100%"></a>
            <a style="width:25%" href="/medicine"><img src="/asset/remon/4.jpg"style="width:100%"></a>
            <a style="width:25%" href="/register"><img src="/asset/remon/5.jpg"style="width:100%"></a>
        </div>
    @endguest --}}
</div>
@endsection
