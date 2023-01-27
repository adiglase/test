@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="container bg-white mb-5 fw-semibold text-secondary" id="form">
        <p class="text-center display-5 fw-bolder mt-3 text-dark">Form Pemesanan</p>

        <form action="/dashboard/orders/{{ $order->order_id }}" method="post" class="row g-2 d-flex justify-content-center mt-2 mb-5">
            @method('put')
            @csrf
            <div class="form-floating col-md-4">
                <input type="text" id="trip_id" name="trip_id" class="form-control @error('trip_id') is-invalid @enderror" value="{{ old('trip_id', $order->trip_id) }}">
                <label for="trip_id">Trip_id</label>
                @error('trip_id')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-floating col-md-4">
                <input type="text" id="order_id" name="order_id" class="form-control @error('order_id') is-invalid @enderror"  value="{{ old('order_id', $order->order_id) }}">
                <label for="order_id">order_id</label>
                @error('order_id')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="w-100"></div>

            <div class="form-floating col-md-4">
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="First Name" name="first_name" value="{{ old('first_name', $order->first_name) }}" >
                <label for="first_name">Nama Depan</label>
                @error('first_name')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
             </div>
            <div class="form-floating col-md-4">
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name"   value="{{ old('last_name', $order->last_name) }}">
                <label for="last_name">Nama Belakang</label>
                @error('last_name')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="w-100"></div>
            <div class="form-floating col-md-4">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email', $order->email) }}">
                <label for="email">Email</label>
                @error('email')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-floating col-md-4 ">
                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"  value="{{ old('phone_number', $order->phone_number) }}"> 
                <label for="phone_number">Nomor Telepon / WhatsApp</label>
                @error('phone_number')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="w-100"></div>
            
            <div class="form-floating col-md-4">
                <input type="number" class="form-control @error('number_of_people') is-invalid @enderror" name="number_of_people" id="number_of_people" min="1" value="2"  value="{{ old('number_of_people', $order->number_of_people) }}">
                <label for="number_of_people">Jumlah Peserta</label>
                @error('number_of_people')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-floating col-md-4">
                <input type="date" class="form-control @error('trip_date') is-invalid @enderror" name="trip_date" id="trip_date"  value="{{ old('trip_date', $order->trip_date) }}">
                <label for="trip_date">Tanggal Tour</label>
                @error('trip_date')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="w-100"></div>

            <div class="form-floating col-md-8">
                <input type="text" class="form-control @error('trip_name') is-invalid @enderror" name="trip_name" id="trip_name"   value="{{ old('trip_name', $order->trip_name) }}">
                <label for="trip_name">Paket Wisata</label>
                @error('trip_name')
                <div  class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="w-100"></div>

            <div class="form-floating col-md-8">
                <textarea class="form-control" name="message" id="message" style="height: 100px" >{{ $order->message }}</textarea>
                <label for="message" >Message</label>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mt-5">
                <button class="btn fs-5  text-white fw-semibold " style="background-color: #5dc6c9; font-family: 'Podkova', serif; letter-spacing: 1px;" type="submit">Pesan Sekarang</button>
            </div>
        </form>
    </div>
</div>
@endsection