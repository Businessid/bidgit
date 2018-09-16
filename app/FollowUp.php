<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies;
use App\Users;

class FollowUp extends Model
{
    protected $table = "tbl_followup";

    public function FllowerData(){
        if($this->follower_type == "company"){
            return $this->belongsTo(Companies::class, 'follower_id', 'pk_companies_id');
        } else{
            return $this->belongsTo(Users::class, 'follower_id', 'pk_users_id');
        }

    }

    public function FllowedData(){
        if($this->followed_type == "company"){
            return $this->belongsTo(Companies::class, 'pk_companies_id', 'followed_id');
        } else {
            return $this->belongsTo(Users::class, 'pk_users_id', 'followed_id');
        }
    }
}
