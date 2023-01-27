<?php

namespace App\Http\Controllers;

use App\Models\trip;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'trip_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:dns',
            'phone_number' => 'required',
            'number_of_people' => 'required',
            'trip_date' => 'required',
            'trip_name' => 'required',
            'message' => 'nullable'
        ],
        [
            'first_name.required'=> 'Kolom Nama Pertama Wajib Di Isi.', // custom message
            'last_name.required'=> 'Kolom Nama Belakang Wajib Di Isi.', // custom message
            'email.required'=> 'Kolom Email Wajib Di Isi.', // custom message
            'phone_number.required'=> 'Kolom Nomor Telepon/WhatsApp  Wajib Di Isi.', // custom message
            'number_of_people.required'=> 'Kolom Jumlah Peserta Wajib Di Isi.', // custom message
            'trip_date.required'=> 'Kolom Tanggal Tour Wajib Di Isi.', // custom message
            'email.email'=> 'Email harus berupa email yang valid, Cth: abc@cth.com.', // custom message

        ]);

        $validatedData['order_id'] = IdGenerator::generate(['table' => 'orders', 'field'=>'order_id', 'length' => 8, 'prefix' =>'TP-']);


        
        Order::create($validatedData);

        return back()->with('success', 'Pemesanan Berhasil!');
        
    }

        /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->slug;
        return $this->order_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
