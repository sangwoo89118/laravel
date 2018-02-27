<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


//    protected $table = 'postadmins';
//    protected $primaryKey = 'post_id';

    protected $fillable = [

        'title', 'content'
    ];




}
