<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UsersCompanies;

class Companies extends Model
{
    protected $table = "tbl_companies";


    public function Users_Companies(){
        return $this->hasMany(UsersCompanies::class, 'fk_companies_id', 'pk_companies_id');
    }

}
