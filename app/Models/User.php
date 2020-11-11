<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function create($data){
        $model = new User; //creating user class object
        is_array($data) ? $model->fill($data) : $model->fill((array) $data);
        $model->password = bcrypt($model->password); //password encryption before insert in db
        return $model->save() ? $model : false;
    }

    /*
        updateData method will update user data.
        First argument can be user model object or user id.
        Second argument user data need to update ( it can be object or array )
    */
    public static function updateData($user, $data)
    {
        if(is_object($user) and $model = $user){ //When user object
            is_array($data) ? $model->fill($data) : $model->fill((array)$data);        
            return $model->save() ? $model : false;
        }elseif($model = User::find($user)){ //When user id
            is_array($data) ? $model->fill($data) : $model->fill((array)$data);        
            return $model->save() ? $model : false;
        }else{
            return 'notfound';
        }
    }
}
