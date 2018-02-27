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
use App\User;
use App\Country;
use App\Photo;


/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIPS
|--------------------------------------------------------------------------
*/




//Polymorphic Relations
Route::get('user/photos', function (){
    $user = User::find(1);

        foreach($user->photos as $photo){
            return $photo->path;
        }

});

//Route::get('post/{id}/photos', function ($id){
//    $post = Post::find($id);
//
//    foreach($post->photos as $photo){
//        echo $photo->path."</br>";
//    }
//
//});

Route::get('photo/{id}/post', function($id){


    $photo = Photo::findOrFail($id);

        return $photo->imageable;


});


// accessing the intermediate table / pivot

//Route::get('user/pivot', function(){
//
//
//    $user = User::find(1);
//
//    foreach($user->roles as $role){
//        return $role->pivot->created_at;
//    }
//});
//
//
//Route::get('/user/country', function (){
//
//    $country = Country::find(1);
//    foreach($country->posts as $post){
//        return $post->title;
//    }
//
//});



// Many to many relationship

//Route::get('/user/{id}/role', function($id){
//
//    $user = User::find($id)->roles()->orderBy('name', 'desc')->get();
//
//    return $user;
//
////    foreach($user->roles as $role){
////        return $role->name;
////    }
//});

////One to One relationship
///
///
//
//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post;
//});
//
////Inverse Relationship
///
///
//Route::get('/post/{id}/user', function($id){
//
//    return Post::find($id)->user->name;
//});

// One to Many relationship
//
//
//Route::get('/posts', function(){
//
//    $user = User::find(1);
//
//
//    foreach($user->posts as $post){
//        echo $post->title. "</br>";
//    }
//
//});








/*
|--------------------------------------------------------------------------
| ELOQUENT OBJECT RELATIONAL MAPPING   ORM
|--------------------------------------------------------------------------
*/


//Route::get('/forcedelete', function(){
//
//    Post::withTrashed()->whereNotNull('deleted_at')->forceDelete();
////    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//});



//Route::get('/restore', function(){
//
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});


//Route::get('/readsoftdelete', function(){
//
////    $post = Post::find(8);
////    return $post;
//
//    $post = Post::withTrashed()->where('id', 8)->get();
//    return $post;
//});

//Route::get('/softdelete', function(){
//
//    Post::find(8)->delete();
//
//});

//Route::get('/delete2', function(){
//
////    Post::destroy(3);
//    Post::destroy([6,7]);
////    Post::where('is_admin', 0)->delete();
//});

//Route::get('/delete', function(){
//   $post = Post::find(4);
//
//   $post->delete();
//});


//Route::get('/update', function(){
//
//    Post::where('id', 5)->where('is_admin', 0)->update(['title'=>'UPDATED BY ELOQUENT', 'content'=>'UPDATED CONTENT BY ELOQUENT']);
//});

//Route::get('/create', function(){
//
//    Post::create(['title'=>'the create method number 2', 'content'=>'I am learning Laravel yeah']);
//
//
//});



//Route::get('/basicinsert', function(){
//
//    $post = Post::find(4);
//
//    $post->title = 'updated title with ORM';
//    $post->content = 'updated content with ORM';
//
//    $post->save();  //save method insert the record
//
//});



//Route::get('/basicinsert', function(){
//
//    $post = new Post;
//
//    $post->title = 'new Eloquent title';
//    $post->content = 'Wow eloquent is really cool';
//
//    $post->save();  //save method insert the record
//
//});

//Route::get('/findmore', function(){
//    $posts = Post::findOrFail(1);
//
//    return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//    return $posts;
//});


//Route::get('/findwhere', function(){
//
//    $posts = Post::where('is_admin', 0)->orderBy('id', 'desc')->get();
//
//    return $posts;
//});


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


//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, content) values(?,?)', ['Laravel PHP NEW', 'Laravel is the best thing that has happened to PHP']);
//
//});
//
//
//Route::get('/', function () {
//    return view('welcome');
//
//});





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

