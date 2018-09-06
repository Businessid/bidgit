<?php

use Illuminate\Database\Seeder;
use App\Sections;

class Sections_Table_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section_Data =[["pk_sections_id"=>1,"section_name"=>"About","section_icon"=>"fa-address-book","section_link"=>"about\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>2,"section_name"=>"News Feed","section_icon"=>"fa-newspaper-o","section_link"=>"newsfeed\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>3,"section_name"=>"Store","section_icon"=>"fa-shopping-cart","section_link"=>"store\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>4,"section_name"=>"Videos","section_icon"=>"fa-video-camera","section_link"=>"videos\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>5,"section_name"=>"Photos","section_icon"=>"fa-picture-o","section_link"=>"photos\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>6,"section_name"=>"Tender","section_icon"=>"fa-gavel","section_link"=>"tender\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>7,"section_name"=>"Jobs","section_icon"=>"fa-address-card","section_link"=>"jobs\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>8,"section_name"=>"Vacancy","section_icon"=>"fa-address-card","section_link"=>"vacancy\/","created_at"=>null,"updated_at"=>null],["pk_sections_id"=>9,"section_name"=>"Real Estate","section_icon"=>"fa-building","section_link"=>"realestate\/","created_at"=>null,"updated_at"=>null]];
        foreach($section_Data as $Data){
            Sections::create($Data);
        }
    }
}
