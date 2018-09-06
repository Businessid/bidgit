<?php

use Illuminate\Database\Seeder;
use App\Companies_Category;
class Companies_Category_Table_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $Companies_Category_Data = [[ "pk_companies_category_id" => "1", "name" => "Information Technology"],[ "pk_companies_category_id" => "2", "name" => "Business Development"],[ "pk_companies_category_id" => "3", "name" => "Construction"],[ "pk_companies_category_id" => "4", "name" => "Hospitality"],[ "pk_companies_category_id" => "5", "name" => "Real Estate"],[ "pk_companies_category_id" => "8", "name" => "Trading"],[ "pk_companies_category_id" => "9", "name" => "Medical"],[ "pk_companies_category_id" => "10", "name" => "Cosmatics"],[ "pk_companies_category_id" => "11", "name" => "Media"],[ "pk_companies_category_id" => "12", "name" => "Services"],[ "pk_companies_category_id" => "13", "name" => "Consulting "],[ "pk_companies_category_id" => "14", "name" => "Shipping"],[ "pk_companies_category_id" => "15", "name" => "Manufacturing"],[ "pk_companies_category_id" => "16", "name" => "Organizing"],[ "pk_companies_category_id" => "17", "name" => "Import/Export"],[ "pk_companies_category_id" => "18", "name" => "Installation"],[ "pk_companies_category_id" => "19", "name" => "Marketing"],[ "pk_companies_category_id" => "20", "name" => "Leasing"],[ "pk_companies_category_id" => "21", "name" => "Transportations"],[ "pk_companies_category_id" => "22", "name" => "Sports"],[ "pk_companies_category_id" => "23", "name" => "Supermarket"],[ "pk_companies_category_id" => "24", "name" => "Events"],[ "pk_companies_category_id" => "25", "name" => "Training"],[ "pk_companies_category_id" => "26", "name" => "Business center"],[ "pk_companies_category_id" => "27", "name" => "Bank"]];
        foreach($Companies_Category_Data as $Category_Data){
            Companies_Category::create($Category_Data);
        }
    }
}
