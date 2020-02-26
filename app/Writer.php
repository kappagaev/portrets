<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
	protected $fillable = ['sex', 'name', 'surname'];

    public function portrets()
    {
    	return $this->hasMany(Portret::class);
    }
}
