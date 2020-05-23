<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\contact;
use App\aword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\news;
use App\User;
use App\Admin;
use App\Comment;
use App\weeklyNews;

class AdminController extends Controller
{
	public function __construct(){
       $this->middleware(['auth','verified']);
    }
    public function index(){
    	$myprofile=auth()->user()->profile;
        $all=(User::all()->count()*10);
        $length=(100/$all);
    	return view('admin.index', compact('myprofile','length'));
    }
    public function adminProfile(){
        $user=auth()->user();
    	return view('admin.profile', compact('user'));
    }
    public function imageChange(){
        $user=auth()->user();
        return view('admin.imageForm', compact('user'));
    }
    public function imageSave(){
    $data=request()->validate([
        'image'=>['image','required']
    ]);
    //dd($data);
    $imagePath = request('image')->store('profiles', 'public');
   //dd($imagePath);
    $image=Image::make(public_path("storage/{$imagePath}"))->fit(500, 500);
    $image->save();

   $save=auth()->user()->profile()->update(['image'=>$imagePath,]);
   if ($save) {
       return redirect('/admin/profile')->with('success', 'successfully updated your profile picture');
   }else {
    return redirect()->back()->with('success', 'Error updating your profile');
   }

    }
    public function profileChange(){
        $profile=auth()->user()->profile;
        return view('admin.profileChangeForm', compact('profile'));
    }
    public function saveProfileEdits(){
        $data= request()->validate([
            'bio'=>['required', 'min:5'],
            'description'=>['required', 'min:15'],
        ]);
        $save=auth()->user()->profile->update($data);
        if ($save) {
            return redirect('admin/')->with('success', 'your profile has been updated successfully');
                    }
                    else{
                        return redirect()->back()->with('success', 'Error updating your Profile');
                    }
    }
    public function newArticle(){
        return view('admin.newArticleForm');
    }
    public function saveArticle(){
        $data=request()->validate([

            'title'=>['required','min:4'],
            'word'=>['required'],
        ]);
        $author=auth()->user()->name;
        $save=auth()->user()->aword()->create([
            'title'=>$data['title'],
            'word'=>$data['word'],
            'author'=>$author,
        ]);
        if ($save) {
            return redirect('/admin/approveArticle')->with('success','Article created successfully');
        }else{
            return redirect()->back()->with('success', 'Error occured saving your article. Please Try again');
        }
    }
    public function approveArticle(){
        //$admin=auth()->user()->id;
        $articles=aword::where('status', 'unapproved')->orderBy('created_at','DESC')->get();
        return view('admin.approveArticle',compact('articles'));
    }
    public function saveArticleAsAproves(aword $aword){
        //dd($article);
        $aword->status='approved';
        $saveupdate=$aword->save();

        if ($saveupdate) {
            return redirect('/admin/Articles/All')->with('success','Article has been approved successfully');
        }else{
            return redirect()->back()->with('success', 'Error occured approving article. Please Try again');
        }

    }

    public function viewAllArticles(){
        $articles=aword::where('status', 'approved')->orderBy('updated_at','DESC')->get();
        return view('admin.approvedArticle',compact('articles'));
    }
    public function MakeArticleFeatured($id){
        $saveupdate=DB::table('awords')->where('id', $id)->update([
            'featured' => 'yes'
            ]);
        if ($saveupdate) {
            return redirect('/admin/Articles/All')->with('success','Featured Articles appear on website. You have made it featured');
        }else{
            return redirect()->back()->with('success', 'Error occured Making featured Article. Please Try again');
        }

    }

    public function createImage(){
        return view('admin.createImageForm');
    }
    public function saveImage(){
        $data=request()->validate([
            'caption'=>['required','string'],
            'image'=>['required', ['image']],
        ]);
     //  dd($data);
        $imagePath = request('image')->store('uploads', 'public'); 
        dd($imagePath);       
        $image=Image::make(public_path("storage/{$imagePath}"))->fit(1300, 1200);
        $image->save();

    auth()->user()->images()->create([
         'caption'=>$data['caption'],
         'image'=>$imagePath,
      ]);

    return redirect('/admin');
    }
    public function saveNews(){
        $data=request()->validate([
            'title'=>['string','required'],
            'body'=>['string','required','min:60']
        ]);
        $user=auth()->user();
        $save=$user->news()->create([
            'title'=>$data['title'],
            'body'=>$data['body'],

        ]);
        if ($save) {
            return redirect('/news/all/'.$user->id)->with('success','News Added and Posted');
                    }
    else{
        return redirect()->back()->with('success','Error creating a new news article');
    }
}
public function newsForm(){
    return view('admin.NewsForm');
}
public function newWeekly(){
    return view('admin.newWeeklyEvent');
}
public function viewAllEvents(){
    $events=weeklyNews::orderBy('created_at','DESC')->get();
    return view('admin.ViewWeeklyEvent',compact('events'));
}
public function getActionForm(){
    return view('admin.GetActionForm');
}
public function saveWeekly(){
    $data=request()->validate([
            'day'=>['string','required','max:40'],
            'event'=>['string','required','max:1000'],
        ]);
        $save=auth()->user()->weeklyNews()->create($data);
        if ($save) {
            return redirect()->back();
                    }
    else{
        return redirect()->back()->with('success','Error creating a new news article');
    }
}
public function viewAllMessages(){
    $viewAllMessages=contact::where('status','unread')->orderBy('created_at','DESC')->get();
    return view('admin.contact', compact('viewAllMessages'));
}
public function SENDrePLY($id){
    $message=contact::find($id);
    $data=request()->validate([
'email'=>['email','required'],
'reply'=>['string', 'required'],
]);
    $reply=Mail::to($data['email'])->send(new SendMailable());

  
   if ($reply) {
       return redirect('/admin')->with('success', 'Reply Sent successfully.');
   }else{
    return redirect()->back()->with('success', 'Error occured sending your message. Please try again.');
   }
   
    
}

public function delete(aword $article)
{
    $article->delete();
    return redirect()->back();
}

public function update(aword $article)
{
    $data=request()->validate([
        'featured'=>['required','string'],
    ]);
    $article->featured=$data['featured'];
    $article->save();
    return redirect()->back();
}

public function showAllnews(User $user)
{
$news=$user->news;
return view('admin.mynews',compact('news'));
}

public function editNews(news $news)
{
    if (auth()->user()->id!=$news->user->id) {
        return redirect()->back()->with('Error','Unmet requirements to edit that news Item');
    }
return view('admin.editMyNews',compact('news'));
}

public function updateNewsItem(news $news)
{
    $id=auth()->user()->id;
    $data=request()->validate([
        'title'=>['string','required','unique:news,title,'.$news->id],
        'body'=>['required'],
    ]);
     if (auth()->user()->id!=$news->user->id) {
        return redirect()->back()->with('Error','Unmet requirements to edit that news Item');
    }
    $news->update($data);
    return redirect('/news/all/'.$id)->with('success','News Item Updated');
}

public function deleteNews(news $news)
{
$id=auth()->user()->id;
 $news->delete();
 return redirect('/news/all/'.$id)->with('success','News Item Deleted. Action Can`t be undone');
}

public function addAdmin()
{
    return view('admin.AddNewAdmin');
}

public function storeAdmin()
{
    $data=request()->validate([
        'admin_code'=>['unique:admins','required','email'],
    ]);
    Admin::create([
        'admin_code'=>$data['admin_code'],
        'user_id'=>0
    ]);
    return redirect('/admin/admin/viewAll')->with('success','Admin created successfully. Email them and advise them to use their email as admin code.');
}

public function allAdmins()
{
    $admins=Admin::orderBy('created_at','DESC')->paginate(10);
    return view('admin.list_all_admins', compact('admins'));
}


public static function markasRead(contact $contact)
    {
        //$contacts=contact::find($contact);
        //dd($contact);
        $contact->status="read";
        $contact->save();
        $output="<span class='alert alert-success'>Message marked as read.</span>";
        return $output;
    }

public function putCommentUp(Comment $comment)
{
     $comment->fine="yes";
        $comment->save();
        return redirect()->back()->with('success','Comment Marked as safe and notified the owner');
}

public function showAllMessagesFromWorld()
{
    $Messages=contact::orderBy('created_at','DESC')->get();
    return view('admin.showAllMessagesFromWorld', compact('Messages'));
}

public function help()
{
    $user=auth()->user();
    return view('admin.helpCenter', compact('user'));
}

public function cmdline()
{
   return \Artisan::call('storage:link',[]);
}



}

