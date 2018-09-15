<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    protected $table  ="tbl_posts_comments";

    public function Replay(){
        return $this->hasMany(PostComments::class, 'fk_post_id', 'pk_post_id');
    }
}
