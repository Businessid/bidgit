<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\Companies;


class Profile_Table_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ProfileData =["profile_id"=>1,"profile_url"=>"bid","profile_type"=>"company"];
        Profile::create($ProfileData);

        $CompanyData =["unique_id"=>"bid","name"=>"Business ID","category"=>"Media","activity"=>"Media","email"=>"ir.businessid.net","mobile"=>"+971511111111","phone"=>"+971511111111","legal_status"=>"Active","registration_number"=>"4546545646848","license_number"=>"6554564564654","license_file"=>"asdasd","headline"=>"Business ID","profile_image"=>"a6s5d4a65s4da","cover_image"=>"a6s5d4a65s4da","website"=>"56456456","nationality"=>"UAE","pobox"=>"545","fk_country_id"=>"1","fk_city_id"=>"1","fk_area_id"=>"1","address"=>"asdasd2asdas","street"=>"sdfsdfsdfsdfs","latitude"=>"25.0325666","longitude"=>"55.656565654","expiry_date"=>"asdasdasd","followers"=>"54546","Following"=>"564545","order_rank"=>"654654","verified"=>"1","status"=>"1","otp"=>"asdasdadd","FCM"=>"asdasdasdasda"];
        Companies::create($CompanyData);
    }
}
