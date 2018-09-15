<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UsersCompanies;
use App\Posts;

class Companies extends Model
{
    protected $table = "tbl_companies";


    public function Users_Companies(){
        return $this->hasMany(UsersCompanies::class, 'fk_companies_id', 'pk_companies_id');
    }


    public function Poasts(){
        return $this->hasMany(Posts::class, 'posted_id', 'pk_companies_id')->where('profile_type','=','company')->orderBy('created_at', 'DESC');
    }
}
