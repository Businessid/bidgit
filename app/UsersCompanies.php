<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;
use App\Companies;


class UsersCompanies extends Model
{
    protected $table = "company_users";


    public function Companies_List(){
        return $this->hasMany(Companies::class, 'pk_companies_id', 'fk_companies_id');
    }


    public function Users_List(){
        return $this->hasMany(Users::class, 'pk_users_id', 'fk_users_id');
    }

}
