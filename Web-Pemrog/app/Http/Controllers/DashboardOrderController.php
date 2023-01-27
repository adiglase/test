<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.orders.index',[
            'orders' => Order::latest()->get(),
            'title' => 'Booking Data'
        ]);
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
        // $validatedData = $request->validate([
        //     'trip_id' => 'required',
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email:dns',
        //     'phone_number' => 'required',
        //     'number_of_people' => 'required',
        //     'trip_date' => 'required',
        //     'trip_name' => 'required',
        //     'message' => 'nullable'
        // ]);

        // $validatedData['order_id'] = IdGenerator::generate(['table' => 'orders', 'field'=>'order_id', 'length' => 8, 'prefix' =>'TP-']);


        
        // Order::create($validatedData);

        // return redirect('/dashboard/orders')->with('success', 'Pemesanan Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('dashboard.orders.show',[
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.orders.edit', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {

        $validatedData = $request->validate([
            'trip_id' => 'required',
            'order_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:dns',
            'phone_number' => 'required',
            'number_of_people' => 'required',
            'trip_date' => 'required',
            'trip_name' => 'required',
            'message' => 'nullable'
        ]);
        
        Order::where('id', $order->id)
            ->update($validatedData);

        return redirect('/dashboard/orders')->with('success', 'Order Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);

        return redirect('/dashboard/orders')->with('success', 'Order Data has been deleted!');
    }
}
