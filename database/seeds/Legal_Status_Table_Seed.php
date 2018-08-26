<?php

use Illuminate\Database\Seeder;
use App\Users_Legal_Status;

class Legal_Status_Table_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Legal_Status_Data =[[ "pk_users_legal_status_id" => "1", "orderby" => "1", "title_en" => "LLC", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "2", "orderby" => "2", "title_en" => "Service Agency", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "3", "orderby" => "3", "title_en" => "FZE", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "4", "orderby" => "4", "title_en" => "Group", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "5", "orderby" => "5", "title_en" => "FZ-LLC", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "6", "orderby" => "6", "title_en" => "Civil company", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "7", "orderby" => "7", "title_en" => "Partnership Company", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "8", "orderby" => "8", "title_en" => "Foreign Recognized Company", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "9", "orderby" => "9", "title_en" => "Private Joint Stock Company", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "10", "orderby" => "10", "title_en" => "Public Joint Stock Company", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "11", "orderby" => "11", "title_en" => "Holding Company", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "12", "orderby" => "12", "title_en" => "Sole Proprietorship", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "13", "orderby" => "13", "title_en" => "Professional Trade Licence", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "14", "orderby" => "14", "title_en" => "Professional Freelance Licence", "description_en" => "", "is_active" => "Y"],[ "pk_users_legal_status_id" => "15", "orderby" => "15", "title_en" => "LLP", "description_en" => "", "is_active" => "Y"]];
        foreach($Legal_Status_Data as $Legal_Data){
            Users_Legal_Status::create($Legal_Data);
        }
    }
}
