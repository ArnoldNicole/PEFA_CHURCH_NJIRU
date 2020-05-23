<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/weekly', 'HomeController@weekly');
Route::get('/history', 'HomeController@history');
Route::get('/contact_us', 'HomeController@contact');
Route::get('/a_word', 'HomeController@messages');
Route::get('/a_word/{aword}', 'HomeController@articleLink');
Route::post('/message/save', 'MessagesController@save');
Route::get('/news','HomeController@news');
Route::get('news/{news}','HomeController@newsLink');
Route::get('/p/{image}','HomeController@fullImage');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/','AdminController@index');
Route::get('admin/profile','AdminController@adminProfile')->middleware('auth');
Route::get('/admin/image/edit', 'AdminController@imageChange')->middleware('auth');
Route::patch('/admin/profile/saveImage', 'AdminController@imageSave')->middleware('auth');
Route::get('/admin/profile/edit', 'AdminController@profileChange')->middleware('auth');
Route::patch('/admin/profile/saveProfile', 'AdminController@saveProfileEdits')->middleware('auth');
Route::get('/admin/createArticle', 'AdminController@newArticle');
Route::post('/admin/article/save','AdminController@saveArticle');
Route::get('/admin/approveArticle','AdminController@approveArticle');
Route::get('article/review/{aword}','AdminController@saveArticleAsAproves');
Route::get('/article/feature/{id}','AdminController@MakeArticleFeatured');
Route::get('/admin/Articles/All','AdminController@viewAllArticles');

//
Route::delete('admin/article/delete/{article}','AdminController@delete');
Route::patch('/admin/article/takedown/{article}','AdminController@update');

/*Route for Admin Images*/
Route::get('/admin/createImage','AdminController@createImage');
Route::post('/admin/createImage/save','AdminController@saveImage');
Route::post('/admin/news/save','AdminController@saveNews');
Route::get('/news/new/create','AdminController@newsForm');

/*Weekly Events*/
Route::get('/admin/weekly/new','AdminController@newWeekly');
Route::get('/admin/weekly/view','AdminController@viewAllEvents');
Route::get('/admin/weekly/takedown','AdminController@getActionForm');
Route::post('/admin/weekly/save','AdminController@saveWeekly');
Route::get('admin/message/view','AdminController@viewAllMessages');
Route::post('/admin/SENDrePLY/{id}','AdminController@SENDrePLY');

Route::get('/admin/weekly_event/{weeklyNews}','WeeklyController@edit');
Route::patch('/admin/weekly_event/Update/{weeklyNews}','WeeklyController@store');
Route::get('/admin/weekly_event/delete/{weeklyNews}','WeeklyController@delete');



//news
Route::get('/news/all/{user}','AdminController@showAllNews');
Route::get('/admin/news/edit/{news}','AdminController@editNews');
Route::patch('/admin/news/update/{news}','AdminController@updateNewsItem');
Route::delete('/admin/news/delete/{news}','AdminController@deleteNews');


//Admins
Route::get('/admin/addNewAdmin','AdminController@addAdmin');
Route::post('/admin/save/newAdmin/','AdminController@storeAdmin');
Route::get('/admin/admin/viewAll','AdminController@allAdmins');
Route::get('/markmessageasread/{contact}','AdminController@markasRead');

//comments
Route::post('/pefa_comments_section/New/{aword}','HomeController@saveComment');
Route::get('/admin/take_comment_down/{comment}','HomeController@putCommentDown');
Route::get('/admin/take_comment_up/{comment}','AdminController@putCommentUp');

//messages
Route::get('/admin/messages/InclusiveInbox','AdminController@showAllMessagesFromWorld');

//edit Article
Route::get('/admin/article/edit/{aword}','ArticlesController@edit');
Route::patch('/admin/article/update/{aword}','ArticlesController@store');

//Help Page
Route::get('/admin/HelpCentre','AdminController@help');
Route::get('commandline', 'AdminController@cmdline');