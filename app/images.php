<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
	protected $fillable =['caption','image'];
    public function user(){
    	return $this->belongsTo(User::class);
}
}
