<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRequest;
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
        $choice = 0;
        return view('profile.index', compact('userInfos', 'choice'));
    }


    // modification du name
    public function editName(){
        $userInfos = Auth::user();

        return view('profile.editName', compact('userInfos'));

    }


    // modification du password
    public function editPassword(){
        $userInfos = Auth::user();

        return view('profile.editPassword');

    }




    public function updateName(UserRequest $request){
        $userInfos = Auth::user();

        $userInfos->update($request->all());

        return redirect('profile');

    }

    public function updatePassword(ChangePasswordRequest $request){
        $userInfos = Auth::user();
            $userInfos->password =  bcrypt($request->input('password'));
            $userInfos->update();
            return redirect('profile');

        // vérifier les champs->si good, update & redirect
    }




}
