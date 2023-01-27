@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
            </form>

            <h1 class="my-3">{{ $post->title }}</h1>
            <p class="mb-0">Posted by : {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }} </p>
            @if ($post->image)
            <div>
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