<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    //

    public function roles(Request $request) {
        $users = User::where('role_type', $request->user)->get();
        return view("admin.user",compact('users'));
    }

}
