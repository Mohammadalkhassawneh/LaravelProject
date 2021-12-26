<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AddTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $categories =Category::all();
        return view('publicSite.add_trip', compact('id', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImage = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('trip_images'), $newImage);

        $trip = new Trip();
        $trip->name = $request->name;
        $trip->description = $request->description;
        $trip->days = $request->days;
        $trip->date = $request->date;
        $trip->minimum_age = $request->minimum_age;
        $trip->price = $request->price;
        $chosed_category = Category::where('category_name', $request->category)->first();
        $trip->category_id = $chosed_category->id;
        $trip->max_visitors = $request->max_visitors;
        $trip->guide_id = Auth::user()->id;
        $trip->image = $newImage;
        $trip->save();
        // return view('publicSite.guide_profile');
        return redirect()->route("guide", Auth::user()->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
        $trips = Trip::find($id);
        $trips->delete();
        $guide_trips = Trip::all();
        $categories = Category::all();
        return view('publicSite.guide_profile', compact('categories', 'guide_trips'));
    }
}
