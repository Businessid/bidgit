<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_companies', function (Blueprint $table) {
            $table->increments('pk_companies_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone');
            $table->string('legal_status')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_file');
            $table->string('headline');
            $table->string('profile_url')->unique()->nullable();
            $table->string('profile_image');
            $table->string('cover_image');
            $table->string('website');
            $table->json('documents')->nullable();
            $table->string('nationality')->nullable();
            $table->string('pobox');
            $table->integer('fk_country_id')->nullable();
            $table->integer('fk_city_id')->nullable();
            $table->integer('fk_area_id')->nullable();
            $table->mediumText('address');
            $table->string('street');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('expiry_date')->nullable();
            $table->string('order_rank');
            $table->tinyInteger('verified');
            $table->tinyInteger('status');
            $table->string('otp');
            $table->string('FCM');
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
        Schema::dropIfExists('tbl_companies');
    }
}
