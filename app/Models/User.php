<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    // protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'image'
    ];

    public function isManager()
    {
      if(($this->role == 'admin' || $this->role == 'manager') && $this->status == 'active'){
        return true;
      }
      return false;
    }

    public function isAdmin()
    {
      if($this->role == 'admin' && $this->status == 'active'){
        return true;
      }
      return false;
    }

    public function isUser($role='user', $role1='manager', $role2='admin')
    {
      if(($this->role == $role || $this->role == $role1 || $this->role == $role2) && $this->status == 'active'){
        return true;
      }
      return false;
    }
}
