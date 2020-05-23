<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aword;

class ArticlesController extends Controller
{
    public function __construct()
    {
    	$this->middleware(['auth','verified']);
    }

    public function edit(aword $aword)
    
    {
        if ($aword->user!=auth()->user()) {
        return redirect()->back()->with('success','You are not Permitted to edit the Article.');
    }
    	return view ('article.edit', compact('aword'));
    }
    public function store(Request $request, aword $aword)
    {
    	$data=request()->validate([
    		'title'=>['required','unique:awords, title,'.$aword->id.'','string','min:4'],
    		'word'=>['required','unique:awords,word,'.$aword->id.' ','string','min:16']
    	]);
    	$aword->update($data);
    	return redirect('/admin/Articles/All')->with('success','Article has been updated successfully');
    }
}
