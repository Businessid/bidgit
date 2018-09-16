<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies;
use App\Users;

class Profile extends Model
{
    protected $table = "tbl_profile";

    public function ProfileData(){
        if ($this->profile_type == "company" ) {
            return $this->belongsTo(Companies::class, 'profile_id', 'pk_companies_id');
        }else{
            return $this->belongsTo(Users::class, 'profile_id', 'pk_users_id');
        }

    }


}
