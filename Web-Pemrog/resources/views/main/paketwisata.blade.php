@extends('layouts.main')
   

@section('header')
<div class="container-fluid  bg-white" data-aos="fade-up">
    <div class="container mt-1" >
        <div class="row row-cols-1" >
            <div class="container-xxl">
                <div class="card border-0" style="background-color: #fff0;" data-aos="fade-up">
                    <img src="/img/Heroo.png" class="card-img"   alt="ParadiseTour">
                    <div class="card-img-overlay row">
                        <div class="align-self-center">
                            <div class="text d-flex justify-content-center ">
                                <h1 class="card-title display-1 text-white" style="font-family: 'Podkova', serif; background-color: rgba(0, 0, 0, 0.403);" data-aos="fade-up">Paradise Tour</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('container')

<div class="album py-5" id="pariwisata" >
            <h1  class="til1 display-4 fw-bolder text-decoration-underline" style="font-family: 'Podkova', serif;" data-aos="fade-up">Kemana tujuan liburan anda??</h1>
    <div class="container mt-4" >
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($trips as $trip)
                <div class="col mt-5"data-aos="fade-up" >
                    <div class="card shadow-sm" >
                        @if ($trip->image)
                            <img src="{{ asset('storage/' . $trip->image) }}" width="100%" height="380" class="card-img" alt="{{ $trip->title }}"> 
                        @else        
                            <img src="/img/img1.jfif" width="100%" height="380" class="card-img" alt="{{ $trip->title }}">
                        @endif

            
                        <div class="card-img-overlay text-white row m-0 " style="background-color: rgba(0, 0, 0, 0.403);">
                            <div class="align-self-center">
                                <h5 class=" my-5 text-center">{{ $trip->title }}</h5>
                                <div class=" mb-3 d-flex justify-content-center m"> <a href="/Paketwisata/{{ $trip->slug }}"><button type="button" class="btn rounded-pill text-white" style="font-family: 'Podkova', serif; background-color: #5dc6c9">Pesan Sekarang <i class="bi bi-arrow-right align-middle"></i></button></a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            @endforeach
        </div>    
    </div>
</div>
    
@endsection



