@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="container bg-white mb-5 fw-semibold text-secondary" id="form">
        <p class="text-center display-5 fw-bolder mt-3 text-dark">Data Pemesanan</p>
        <form action="/dashboard/orders/{{ $order->order_id }}" method="post" class="row g-2 d-flex justify-content-center mt-2 mb-5">
            @method('put')
            @csrf
            <div class="form-floating col-md-4">
                <input type="text" id="trip_id" name="trip_id" class="form-control" readonly value="{{ old('trip_id', $order->trip_id) }}">
                <label for="trip_id">Trip_id</label>
            </div>

            <div class="form-floating col-md-4">
                <input type="text" id="order_id" name="order_id" class="form-control" readonly value="{{ old('order_id', $order->order_id) }}">
                <label for="order_id">order_id</label>
            </div>

            <div class="w-100"></div>

            <div class="form-floating col-md-4">
                <input type="text" class="form-control" id="first_name" placeholder="First Name" value="{{ old('first_naem', $order->first_name) }}" readonly>
                <label for="first_name">Nama Depan</label>
             </div>
            <div class="form-floating col-md-4">
                <input type="text" class="form-control" name="last_name" id="last_name"  readonly value="{{ old('last_name', $order->last_name) }}">
                <label for="last_name">Nama Belakang</label>

            </div>
            
            <div class="w-100"></div>
            <div class="form-floating col-md-4">
                <input type="email" class="form-control" id="email" readonly value="{{ old('email', $order->email) }}">
                <label for="email">Email</label>
            </div>

            <div class="form-floating col-md-4 ">
                <input type="tel" class="form-control" name="phone_number" id="phone_number" readonly value="{{ old('phone_number', $order->phone_number) }}"> 
                <label for="phone_number">Nomor Telepon / WhatsApp</label>
            </div>
            
            <div class="w-100"></div>
            
            <div class="form-floating col-md-4">
                <input type="number" class="form-control" name="number_of_people" id="number_of_people" min="1" value="2" readonly value="{{ old('number_of_people', $order->number_of_people) }}">
                <label for="number_of_people">Jumlah Peserta</label>
            </div>
            
            <div class="form-floating col-md-4">
                <input type="date" class="form-control" name="trip_date" id="trip_date" readonly value="{{ old('trip_date', $order->trip_date) }}">
                <label for="trip_date">Tanggal Tour</label>
            </div>
            
            <div class="w-100"></div>

            <div class="form-floating col-md-8">
                <input type="text" class="form-control" name="trip_name" id="trip_name"  readonly value="{{ old('trip_name', $order->trip_name) }}">
                <label for="trip_name">Paket Wisata</label>
            </div>

            <div class="w-100"></div>

            <div class="form-floating col-md-8">
                <textarea class="form-control" name="message" id="message" style="height: 100px" readonly >{{Request::old('message')}} {{ $order->message }}</textarea>
                <label for="message" >Message</label>
            </div>
        </form>
    </div>
</div>
@endsection