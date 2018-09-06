<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyHideSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_hide_sections', function (Blueprint $table) {
            $table->increments('pk_company_hide_sections_id');
            $table->bigInteger('fk_companies_id');
            $table->bigInteger('fk_section_id');
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
        Schema::dropIfExists('tbl_company_hide_sections');
    }
}
