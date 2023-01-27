@extends('layouts.main')
   

@section('container')

<div class="album py-5" id="pariwisata" data-aos="fade-up">
        <h1  class="display-4 fw-bolder text-decoration-underline" style="font-family: 'Joan', serif;">Ada apa aja sih di Batam??</h1>

    <div class="container wis mt-5" >
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($posts as $post)
                <div class="col" >
                    <div class="card shadow-sm" data-aos="fade-up">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" width="100%" height="400" class="card-img" alt="{{ $post->title }}"> 
                        @else        
                            <img src="/img/img1.jfif" width="100%" height="400" class="card-img" alt="{{ $post->title }}">
                        @endif

            
                        <div class="card-img-overlay text-white" style="background-color: rgba(0, 0, 0, 0.403);">
                            <span class="mb-3" style="position:absolute; bottom:0; ">
                                <h5 class="card-title" >
                                    <a href="/Pariwisata/{{ $post->slug }}" class="text-decoration-none text-white">{{ $post->title }}</a>
                                </h5>
                                <p class="card-text pe-2" style="text-align: justify;">{{ $post->excerpt }}</p>
                                <p class="card-text ">{{ $post->created_at->diffForHumans() }}</p>
                            </span>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</div>
    
@endsection