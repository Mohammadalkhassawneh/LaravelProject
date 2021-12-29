<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trip;

class TourController extends Controller
{
    //

    public function index()
    {
<<<<<<< HEAD
        // $guides = User::where('role_type', 'guide')->get();
        // return view("publicSite.tour_guide", compact('guides'));
=======

>>>>>>> 60c20ec5cd18355f2a6a5c69752d1695ade6d15a
        $guides = User::where('role_type', 'guide')->get();
        return view("publicSite.tour_guide", compact('guides'));
<<<<<<< HEAD
=======

>>>>>>> 60c20ec5cd18355f2a6a5c69752d1695ade6d15a
    }

    public function getGuide($id)
    {
        $user = User::find($id);
        $guide_trips = Trip::where('guide_id', $id)->get();
        // Sol2 : $user->trip
        return view('publicSite/guide_profile', compact('user', 'guide_trips'));
    }
}
