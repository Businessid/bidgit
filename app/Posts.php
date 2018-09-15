<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostFiles;
use App\PostComments;

class Posts extends Model
{
     protected $table = 'tbl_posts';
     protected $fillable = [
        'profile_type',
        'posted_id',
        'post_by',
        'post_to',
        'title',
        'hashtags',
        'privacy',
        'status'
       ];



    public function Files(){
        return $this->hasMany(PostFiles::class, 'fk_post_id', 'pk_post_id');
    }


    public function Comments(){
        return $this->hasMany(PostComments::class, 'fk_post_id', 'pk_post_id');
    }



}
