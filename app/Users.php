<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "tbl_users";

    public function UserCompany(){
        return $this->belongsTo(UsersCompanies::class, 'pk_users_id', 'fk_users_id');
    }



    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'phone',
        'password',
        'headline',
        'bio',
        'profile_image',
        'cover_image',
        'profile_url',
        'religion',
        'birth_year',
        'gender',
        'marital',
        'website',
        'nationality',
        'fk_country_id',
        'fk_city_id',
        'fk_area_id',
        'address',
        'street',
        'expiry_date',
        'order_rank',
        'verified',
        'status',
        'otp',
        'FCM',
    ];

}
