<?php

use Illuminate\Database\Seeder;
use App\Users_Category;
class Categories_Table_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories_Data = [[ "pk_users_category_id" => "1", "category_name" => "Information Technology"],[ "pk_users_category_id" => "2", "category_name" => "Business Development"],[ "pk_users_category_id" => "3", "category_name" => "Construction"],[ "pk_users_category_id" => "4", "category_name" => "Hospitality"],[ "pk_users_category_id" => "5", "category_name" => "Real Estate"],[ "pk_users_category_id" => "8", "category_name" => "Trading"],[ "pk_users_category_id" => "9", "category_name" => "Medical"],[ "pk_users_category_id" => "10", "category_name" => "Cosmatics"],[ "pk_users_category_id" => "11", "category_name" => "Media"],[ "pk_users_category_id" => "12", "category_name" => "Services"],[ "pk_users_category_id" => "13", "category_name" => "Consulting "],[ "pk_users_category_id" => "14", "category_name" => "Shipping"],[ "pk_users_category_id" => "15", "category_name" => "Manufacturing"],[ "pk_users_category_id" => "16", "category_name" => "Organizing"],[ "pk_users_category_id" => "17", "category_name" => "Import/Export"],[ "pk_users_category_id" => "18", "category_name" => "Installation"],[ "pk_users_category_id" => "19", "category_name" => "Marketing"],[ "pk_users_category_id" => "20", "category_name" => "Leasing"],[ "pk_users_category_id" => "21", "category_name" => "Transportations"],[ "pk_users_category_id" => "22", "category_name" => "Sports"],[ "pk_users_category_id" => "23", "category_name" => "Supermarket"],[ "pk_users_category_id" => "24", "category_name" => "Events"],[ "pk_users_category_id" => "25", "category_name" => "Training"],[ "pk_users_category_id" => "26", "category_name" => "Business center"],[ "pk_users_category_id" => "27", "category_name" => "Bank"]];
        foreach($Categories_Data as $Category_Data){
            Users_Category::create($Category_Data);
        }
    }
}
