<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //

    public function index() {
        $guides = User::where('role_type', 'guide')->get();
        return view("publicSite.tour_guide",compact('guides'));
    }


}
