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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('pk_users_id')->nullable();;
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone');
            $table->string('password')->nullable();
            $table->mediumText('headline');
            $table->string('bio');
            $table->string('profile_image');
            $table->string('cover_image');
            $table->string('profile_url')->unique()->nullable();
            $table->string('religion');
            $table->year('birth_year');
            $table->string('gender')->nullable();
            $table->string('marital');
            $table->string('website');
            $table->string('nationality')->nullable();
            $table->integer('fk_country_id')->nullable();
            $table->integer('fk_city_id')->nullable();
            $table->integer('fk_area_id')->nullable();
            $table->mediumText('address');
            $table->string('street');
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
        Schema::dropIfExists('users');
    }
}
