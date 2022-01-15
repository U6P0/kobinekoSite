<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

use App\Models\User;
use App\Models\SocialUser;
use App\Models\Mountain;
use App\Models\Climedmountain;

use Auth;
use DB;

class ProfileController extends Controller
{
    //
    public function index() {
       
        $climedmountains = Climedmountain::where('user_id', Auth::user()->id)->get();
        return view('profile', ['registeredmountains' => $climedmountains]);
    
    }
    
}
