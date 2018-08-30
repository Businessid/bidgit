<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('pk_users_id')->nullable();
            $table->tinyInteger('fk_companies_id')->nullable();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email')->unique()->nullable();
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->mediumText('designation')->nullable();
            $table->string('bio')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('profile_url')->unique()->nullable();
            $table->string('religion')->nullable();
            $table->year('birth_year')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->string('website')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('fk_country_id')->nullable();
            $table->integer('fk_city_id')->nullable();
            $table->integer('fk_area_id')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('street')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('order_rank')->nullable();
            $table->tinyInteger('verified')->nullable();
            $table->tinyInteger('status');
            $table->string('otp')->nullable();
            $table->string('FCM')->nullable();
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
        Schema::dropIfExists('tbl_users');
    }
}
