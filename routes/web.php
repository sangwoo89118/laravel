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



use App\Post;


/*
|--------------------------------------------------------------------------
| ELOQUENT OBJECT RELATIONAL MODEL   ORM
|--------------------------------------------------------------------------
*/


Route::get('/findwhere', function(){

    $posts = Post::where('is_admin', 0)->orderBy('id', 'desc')->get();

    return $posts;
});




//
//Route::get('/find', function(){
//
//    $post = Post::find(4);
//
//    return $post -> title;
//    foreach($posts as $post){
//        return $post -> title;
//    }
//
//});


//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//
//    foreach($posts as $post){
//        return $post -> title;
//    }
//
//});



/*
|--------------------------------------------------------------------------
| DATABASE RAW SQL
|--------------------------------------------------------------------------
*/

//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from posts where id = ?', [3]);
//
//    return $deleted;
//});


//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = "Updated Title" where id = ?', [3]);
//
//    return $updated;
//
//});



//Route::get('/read', function(){
//
//
//    $result = DB::select('select * from posts where id = ?', [3]);

//    foreach( $result as $post ){
//        return $post->title;
//    }
//    return var_dump($result);
//});


Route::get('/insert', function(){

    DB::insert('insert into posts(title, content) values(?,?)', ['Laravel PHP NEW', 'Laravel is the best thing that has happened to PHP']);

});


Route::get('/', function () {
    return view('welcome');

});





/*
|--------------------------------------------------------------------------
| BASIC ROUTINGS
|--------------------------------------------------------------------------
*/

//Route::resource('posts', 'PostsController');


//Route::get('/contact', 'PostsController@contact');

//Route::get('post/{id}/{name}/{address}', 'PostsController@show_post');


//Route::get('/post/{id}', "PostsController@index");


//
//Route::get('/about', function () {
//    return "Hi about page";
//});

//Route::get('/contact', function () {
//    return "Hi I am contact";
//});

//Route::get('/post/{id}/{name}', function ($id, $name) {
//
//    return "This is post number ". $id . " " . $name;
//
//});
//
//
//Route::get('admin/posts/example', array('as' => 'admin.home', function () {
//
//    $url = route('admin.home');
//
//    return "this url is ". $url;
//
//
//}));

