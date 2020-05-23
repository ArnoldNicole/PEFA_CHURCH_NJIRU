<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeeklyNews;

class WeeklyController extends Controller
{
    public function __construct()
    {
    	return $this->middleware(['auth','verified']);
    }

    public function edit(WeeklyNews $weeklyNews)
    {
    	if ($weeklyNews->user!=auth()->user()) {
    		return redirect()->back()->with('success','You have no sufficient privilledges to edit the weekly event');
    	}
    	return view('admin.UpdatenewWeeklyEvent', compact('weeklyNews'));
    }

    public function store(WeeklyNews $weeklyNews)
    {
    	if ($weeklyNews->user!=auth()->user()) {
    		return redirect()->back()->with('success','You have no sufficient privilledges to edit the weekly event');
    	}

    	   $data=request()->validate([
    	        'day'=>['string','required','max:40'],
    	        'event'=>['string','required','max:1000'],
    	    ]);
    	    $save=$weeklyNews->update($data);
    	    if ($save){
    	        return redirect('/admin/weekly/view')->with('success','Event Updated Successfully');
    	           }
    	    else{
    	    return redirect()->back()->with('success','Error creating a new news article');
    	       }
    }

    public function delete(WeeklyNews $weeklyNews)
    {
        if ($weeklyNews->user!=auth()->user()) {
            return redirect()->back()->with('success','You have no sufficient privilledges to delete the weekly event');
        }
        $weeklyNews->delete();
        return redirect()->back();
    }
}
