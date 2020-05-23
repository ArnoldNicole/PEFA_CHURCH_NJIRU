<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weeklyNews extends Model
{
    protected $fillable=['day', 'event'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
