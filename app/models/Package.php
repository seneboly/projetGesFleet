<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Entreprise;

class Package extends Model
{
    protected $guarded = [];

    public function entreprises(){

    	return $this->hasMany(Entreprise::class);
    }
}
