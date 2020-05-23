<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aword extends Model
{
	protected $fillable=['title','word','author'];
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class)->orderBy('created_at','DESC');
    }
}
