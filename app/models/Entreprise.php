<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Package;

class Entreprise extends Model
{
    protected $guarded = [];

    public function users(){

    	return $this->hasMany(User::class);
    }

    public function package(){

        return $this->belongsTo(Package::class);
    }
}
