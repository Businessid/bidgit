<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_companies_id');
            $table->string('branch_name');
            $table->string('tel');
            $table->string('mobile');
            $table->string('email');
            $table->string('fk_country_id');
            $table->string('fk_city_id');
            $table->string('fk_area_id');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_company_branches');
    }
}
