<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.trips.index', [
            "trips" =>Trip::all(),
            'title' => 'Trip Package'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.trips.create');
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
            'title' => 'required',
            'slug' => 'required|unique:trips',
            'image' => 'image|file|max:1024',
            'destination' => 'required',
            'price' => 'required',
            'facility' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('trip-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        
        Trip::create($validatedData);

        return redirect('/dashboard/trips')->with('success', 'New Trip Package has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        return view('dashboard.trips.show', [
            'trip' => $trip
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        return view('dashboard.trips.edit', [
            'trip' => $trip
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image|file|max:1024',
            'destination' => 'required',
            'price' => 'required',
            'facility' => 'required'
        ];

        if($request->slug != $trip->slug) {
            $rules['slug'] = 'required|unique:trips';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('trip-images');
        }


        // $validatedData['user_id'] = auth()->user()->id;

        Trip::where('id', $trip->id)
            ->update($validatedData);

        return redirect('/dashboard/trips')->with('success', ' Trip Package has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        if($trip->image) {
            Storage::delete($trip->image);
        }
        Trip::destroy($trip->id);

        return redirect('/dashboard/trips')->with('success', 'New post has been deleted!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Trip::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
