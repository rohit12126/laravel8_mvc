<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\UserManager;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function updateProfile(Request $req)
    {
        $req->validate([
            'name'    => 'required|string',
            'mobile'	=> 'required|numeric|digits:10',
            'address'	=> 'required|string'
        ]);
        $result = UserManager::updateProfile($req);
        if($result === true){
            $req->session()->flash('alert-success', 'Your profile updated successfully!'); //set session success message
        }else{
            $req->session()->flash('alert-error', 'Your profile updation failed!'); //set session error message
        }
        return redirect()->back();
    }

    public function showUserList()
    {
        $user_list = UserManager::getAllUserList();
        return view('user_list', compact('user_list'));
    }
}
