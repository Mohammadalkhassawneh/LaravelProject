<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trip;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //

    public function index()
    {
        $guides = User::where('role_type', 'guide')->get();
        return view("publicSite.tour_guide", compact('guides'));
    }

    public function getGuide($id)
    {
        $user = User::find($id);
        $trips = Trip::where('guide_id', $id)->get();
        return view('publicSite/guide_profile', compact('user'));
    }
}
