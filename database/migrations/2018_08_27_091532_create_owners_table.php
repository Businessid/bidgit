<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_owners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_companies_id');
            $table->string('full_name');
            $table->integer('type');
            $table->string('percentage_of_share')->nullable();
            $table->integer('nationality');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('id_no')->nullable();
            $table->string('id_image')->nullable();
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
        Schema::dropIfExists('tbl_company_owners');
    }
}
