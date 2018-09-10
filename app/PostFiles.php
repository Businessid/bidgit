<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFiles extends Model
{
     protected $table = 'tbl_post_files';
     protected $fillable = [
        'fk_post_id',
        'type',
        'file'
       ];
}
