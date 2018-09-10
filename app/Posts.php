<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
     protected $table = 'tbl_posts';
     protected $fillable = [
        'fk_user_id',
        'title',
        'hashtags',
        'privacy',
        'status'
       ];
}
