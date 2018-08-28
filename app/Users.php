<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "tbl_users";


    public function UserCompany(){
        return $this->belongsTo(UsersCompanies::class, 'pk_users_id', 'fk_users_id');
    }

}
