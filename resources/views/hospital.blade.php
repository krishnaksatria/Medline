@extends('layouts.app')
<link href="{{ asset('css/hospital.css') }}" rel="stylesheet">
<title>Hospitals</title>
 
 @section('content')
    <div class="container">
        <div class="hospitalPart" data-aos="fade-up">
            <div class="hospitalLeft">
                <h1 class="darkpurple headerFont title">Hospitals</h1>
                <hr>
                <br>
                Cari rumah sakit dan buat janji dengan dokter secara cepat, mudah dan murah hanya di Medline, dibantu dengan fitur pengecekan antrian sehingga memudahkan anda dalam mengatur waktu. Mulai cari rumah sakit :
                <br><br>
                <form action="/findhospital" method="get">
                    <input class="form-control" type="text" placeholder="Search by hospital name" aria-label="Search" class="searchBar" name="search">
                    <br>
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
            <div class="hospitalRight">
                <img src="{{asset('asset/hospital.jpg')}}" alt="" class="hospitalImg"> 
            </div>
        </div> 

        <div class="hospitalPart hospitalMap" data-aos="fade-up">      
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.338574049373!2d106.84284701389075!3d-6.219006095498071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38a52f81949%3A0xce7fe62b16140512!2sMother%20and%20Child%20Hospital%20Budhi%20Jaya!5e0!3m2!1sen!2sid!4v1607418290920!5m2!1sen!2sid" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="w-25 hospitalMapText" style="text-align:right" data-aos="fade-up">
                <h2 class="purple headerFont">Find Hospitals Around You</h2>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur perferendis nisi impedit fuga maiores ut alias ex, laudantium perspiciatis quibusdam voluptatum laboriosam, itaque possimus, excepturi provident ipsam? Vel, veniam beatae! 
            </div>         
        </div>
        <h2 class="purple headerFont"  data-aos="fade-up">2020 Best Rated Hospital</h1>
        <div class="hospitalPart" data-aos="fade-up" style="margin-bottom: 1vh">
            @foreach ($hospitals as $hospital)
                <div class="card" style="width: 25%;">
                    <img class="card-img-top" src="{{$hospital->image}}" alt="Card image cap">
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
        <a href="/hospital/all" class="btn btn-primary" style="margin-bottom:5vh">View All</a>

    </div>
@endsection