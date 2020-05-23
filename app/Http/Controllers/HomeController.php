<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aword;
use Illuminate\Support\Facades\DB;
use App\images;
use App\news;
use App\weeklyNews;
use App\Comment;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news=aword::where('featured', 'yes')->orderBy('created_at','DESC')->get();
        return view('home',compact('news'));
    }
    public function gallery(){
        $images =images::orderBy('created_at','desc')->paginate(15);
return view('gallery', compact('images'));
    }
     public function weekly(){
     	$weekly=weeklyNews::all();
  return view('weekly',compact('weekly'));      
    }
     public function history(){
    return view('history');    
    }
     public function contact(){
    return view('contact_us');    
    }
     public function messages(){
        $featuredArticles=aword::where('featured', 'yes')->first();
       //dd($featuredArticles);
         $Articles=aword::where('featured', 'yes')->get();
     return view('messages', compact('featuredArticles','Articles'));   
    }
    public function news(){
    	$news =news::first();
        $allnews=news::orderBy('created_at','DESC')->get();
        return view('news', compact('news','allnews'));
        
    }
    public function fullImage(images $image){
        return view('image', compact('image'));
    }

    public function saveComment(aword $aword)
    {
        $data=request()->validate([
            'name'=>['required','string','min:3'],
            'email'=>['required','string','email','min:3'],
            'comment'=>['required','string','min:5'],
        ]);
        $aword->comments()->create($data);
        return redirect()->back();

    }

    public function articleLink(aword $aword)
    {
       $featuredArticles=$aword;
       // dd($featuredArticles);
         $Articles=aword::where('featured', 'yes')->get();
     return view('messages', compact('featuredArticles','Articles'));  
    }

    public function newsLink(news $news)
    {
        $allnews=news::orderBy('created_at','DESC')->get();
        return view('news', compact('news','allnews'));
    }

    public function putCommentDown(Comment $comment)
    {
        $comment->fine="no";
        $comment->save();
        return redirect()->back();
    }
}
