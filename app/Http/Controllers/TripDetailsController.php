<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripDetailsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tripDetails=Trip::find($id);
        
        return view('publicSite.trip-details',compact('tripDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edited_trip = Trip::find($id);
        $current_category_id = $edited_trip->category_id;
        $current_category = Category::find($current_category_id);

        $categories = Category::all();
        return view('publicSite.edit_trip', compact('edited_trip', 'categories', 'current_category'));
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
        $tripDetails = Trip::find($id);
        $newImage = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('trip_images'), $newImage);

        $tripDetails->name = $request->name;
        $tripDetails->description = $request->description;
        $tripDetails->date = $request->date;
        $tripDetails->days = $request->days;
        $chosed_category = Category::where('category_name', $request->category)->first();
        $tripDetails->category_id = $chosed_category->id;
        $tripDetails->price = $request->price;
        $tripDetails->max_visitors = $request->max_visitors;
        $tripDetails->minimum_age = $request->minimum_age;
        $tripDetails->image = $newImage;
        $tripDetails->update();
        $categories = Category::all();

        return view('publicSite.trip-details', compact('tripDetails'));
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
