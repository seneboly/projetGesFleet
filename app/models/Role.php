<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\User;

class Role extends Model
{
    protected $guarded = [];

   public function permissions() {

      return $this->belongsToMany(Permission::class,'roles_permissions');
          
   }

   public function users() {

      return $this->belongsToMany(User::class,'users_roles');
          
   }
}
