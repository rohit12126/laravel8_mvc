<?php
namespace App\Classes;

use App\Models\User as UserModel; //load user model & alias User model class to UserModel
use Illuminate\Support\Facades\Auth;

class UserManager
{
    public static function updateProfile($req)
    {
        $req->request->remove('_token'); //removing _token input
        $response = UserModel::updateData(Auth::user()->id, $req->all()); //passing request array to model
        if ($response === false) {
            return false;
        } else {
            return true;
        }
    }

    public static function getAllUserList()
    {
        return UserModel::get();
    }
}