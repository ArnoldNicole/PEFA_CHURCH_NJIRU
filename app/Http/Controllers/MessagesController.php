<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\contact;

class MessagesController extends Controller
{
    public function save(){
    	$data=request()->validate([
    		'name'=>['required','string'],
			'email'=>['required','email'],
			'message'=>['required','string', 'min:20']
    	]);
    	$save=contact::create($data);
    	if ($save) {
    		return redirect('/a_word')->with('success', 'Your message was received. We`ll reach back to you. Meanwhile check out this amazing articles');
    	}else{
    		return redirect()->back()->with('success', 'Error occured sending your message. Please try again.');
    	}

    }
}
