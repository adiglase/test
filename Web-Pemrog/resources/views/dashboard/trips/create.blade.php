@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Trip Packages</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/trips" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            @error('destination')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="destination" type="hidden" name="destination" value="{{ old('destination') }}">
            <trix-editor input="destination"></trix-editor>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="price" type="hidden" name="price" value="{{ old('price') }}">
            <trix-editor input="price"></trix-editor>
        </div>

        <div class="mb-3">
            <label for="facility" class="form-label">Facility</label>
            @error('facility')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="facility" type="hidden" name="facility" value="{{ old('facility') }}">
            <trix-editor input="facility"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create Trip Package</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/trips/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data =>slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection