<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $userInfos = Auth::user();
        return view('profile.index', compact('userInfos'));
    }


}
