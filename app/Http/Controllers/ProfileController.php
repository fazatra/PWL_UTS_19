<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function profile(){

            $profile2 = Profile::where('id', 2)->get();
        return view('profile', compact('profile2'));

    }

}
