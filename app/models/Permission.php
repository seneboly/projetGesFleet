<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Permission;

class Permission extends Model
{
    protected $guarded = [];

    public function roles() {

       return $this->belongsToMany(Role::class,'roles_permissions');
           
    }

    public function users() {

       return $this->belongsToMany(User::class,'users_permissions');
           
    }
}
