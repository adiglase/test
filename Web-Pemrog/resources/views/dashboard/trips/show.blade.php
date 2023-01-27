@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mt-2" data-aos="fade-up">
        <div class="col-lg-8">
            <a href="/dashboard/trips" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Trip Packcage</a>    
            <a href="/dashboard/trips/{{ $trip->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>   
            <form action="/dashboard/trips/{{ $trip->slug }}" method="trip" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
            </form>
        </div>
        <div class="col-lg-8 mt-2">
            <div class="card p-1 shadow-lg p-3 mb-5 bg-body rounded" >
                <h1 class="fw-semibold px-2 display-5">{{ $trip->title }}</h1>
                @if ($trip->image)
                    <div >
                        <img src="{{ asset('storage/' . $trip->image) }}" class="img-fluid rounded-2" width="100%" height="400"  alt="{{ $trip->title }}"> 
                    </div>
                @else        
                    <img src="/img/img1.jfif" class="img-fluid rounded-2" width="100%" height="400"  alt="{{ $trip->title }}">

                @endif


                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item border-0 rounded " data-aos="fade-up">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button rounded fs-5 fw-semibold text-white" style="font-family: 'Podkova', serif; background-color: #00bff3; letter-spacing: 1px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Destinasi
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <article class="my-3 fs-5">
                                    {!! $trip->destination !!}
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2 border-0 rounded" data-aos="fade-up">
                        <h2 class="accordion-header " id="headingTwo">
                            <button class="accordion-button collapsed rounded fs-5 fw-semibold text-white" style="font-family: 'Podkova', serif; background-color: #00bff3; letter-spacing: 1px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Harga
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <article class="my-3 fs-5">
                                    {!! $trip->price !!}
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2 border-0 rounded" data-aos="fade-up">
                        <h2 class="accordion-header " id="headingThree">
                            <button class="accordion-button collapsed rounded fs-5 fw-semibold text-white" style="font-family: 'Podkova', serif; background-color: #00bff3; letter-spacing: 1px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Fasilitas
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <article class="my-3 fs-5">
                                    {!! $trip->facility !!}
                                </article>
                            </div>
                        </div>
                    </div>

                </div>                     
            </div>
        </div>

    </div>
</div>
@endsection