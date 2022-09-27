<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        // 'visible_password',
        'is_admin'
    ];
    private $limit = 10;

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
    // method for store user
    public function storeUser($data){
        $data['visible_password'] = $data['password'];
        $data['password'] = bcrypt($data['password']);
        $data['is_admin'] = 0;
        return User::create($data);
    }
    // Method for all users
    public function allUsers(){
        return User::latest()->paginate($this->limit);
    }

    public function findUser($id){
        return User::find($id);
    }

    public function updateUser($data,$id){
        $user = User::find($id);
        if($data['password']){
            $user->password = bcrypt($data['password']);
            $user->visible_password = $data['password'];
        }

        $user->name = $data['name'];
        $user->save();
        return $user;

    }

    public function deleteUser($id){
        return User::find($id)->delete();
    }
}
