<?php

namespace App;

use App\Writer;
use Illuminate\Database\Eloquent\Model;

class Portret extends Model
{
	protected $fillable = ['writer_id'];

    public function writer()
    {
    	return $this->belongsTo(Writer::class);
    }
}
