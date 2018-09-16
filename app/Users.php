<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "tbl_users";


    public function UserCompany(){
        return $this->belongsTo(UsersCompanies::class, 'pk_users_id', 'fk_users_id');
    }



    public function Poasts(){
        return $this->hasMany(Posts::class, 'posted_id', 'pk_users_id')->where('profile_type','=','user')->orderBy('created_at', 'DESC');
    }


    public function Followers(){
        return $this->hasMany(FollowUp::class, 'followed_id', 'pk_users_id')->where('followed_type','=','user')->orderBy('created_at', 'DESC');
    }

    public function Following(){
        return $this->hasMany(FollowUp::class, 'follower_id', 'pk_users_id')->where('follower_type','=','user')->orderBy('created_at', 'DESC');
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
