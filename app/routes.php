<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
  return View::make('app');
});

Route::get('/api', function()
{
  return View::make('api');
});
Route::get('/test', function()
{
   
   $data = Tag::find(2);
   $data = $data->posts()->get();
   return Response::json($data);
});

Route::get('/api/postsWithTags', function()
{
  $data = Post::with('tags')->get(array('id', 'title', 'text', 'image_url'));
    return Response::json($data);
});

Route::get('/api/posts', function()
{
  $data = Post::get(array('id', 'title', 'text', 'image_url'));
  	return Response::json($data);
});

Route::get('/api/tags', function()
{
  $data = Tag::get(array('id', 'tag'));
  return Response::json($data);
});

Route::get('/api/post/{id}', function($id)
{
  $data = Post::where('id',$id)->get(array('id', 'title', 'text', 'image_url'));
  return Response::json($data);
});

Route::get('/api/tag/{id}', function($id)
{

  $data = Tag::find($id)->where('id',$id)->get(array('id', 'tag'));

  return Response::json($data);
});
