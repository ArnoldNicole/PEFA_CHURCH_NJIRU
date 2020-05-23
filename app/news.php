<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
  protected $fillable=['title','body'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
