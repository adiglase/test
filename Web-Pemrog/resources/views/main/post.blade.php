@extends('layouts.main')

@section('container')
    <div class="container ">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <a href="/Pariwisata" class="btn text-white" style="background-color: #5dc6c9"><i class="bi bi-arrow-left"></i> Back to Posts</a>
   
                <h1 class="mt-3 display-4 fw-bolder">{{ $post->title }}</h1>
                <p>Posted by : Admin | {{ $post->created_at->diffForHumans() }} </p>
                @if ($post->image)
                <div >
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid " width="100%" height="400"  alt="{{ $post->title }}"> 
                </div>
                @else        
                <img src="/img/img1.jfif" class="img-fluid " width="100%" height="400"  alt="{{ $post->title }}">
    
                @endif

                <article class="my-3 fs-5" style="text-align: justify;">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>    
@endsection