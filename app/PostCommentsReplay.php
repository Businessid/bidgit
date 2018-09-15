<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCommentsReplay extends Model
{
    protected $table  ="tbl_posts_comments_replay";

    public function Replay(){
        return $this->hasMany(PostComments::class, 'fk_post_id', 'pk_post_id');
    }
}
