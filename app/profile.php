<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	protected $fillable=['image','bio','description'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
