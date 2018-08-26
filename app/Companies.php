<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UsersCompanies;

class Companies extends Model
{
    protected $table = "companies";


    public function Users(){
        return $this->hasMany(UsersCompanies::class, 'fk_company_id', 'pk_companies_id');
    }

}
