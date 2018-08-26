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
            $table->increments('id')->nullable();;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone');
            $table->string('password')->nullable();
            $table->text('headline');
            $table->string('bio');
            $table->string('profile_image');
            $table->string('cover_image');
            $table->string('profile_url')->unique()->nullable();
            $table->string('religion');
            $table->string('birthday');
            $table->string('gender')->nullable();
            $table->string('marital');
            $table->string('website');
            $table->string('nationality')->nullable();
            $table->string('fk_country_id')->nullable();
            $table->string('fk_city_id')->nullable();
            $table->string('fk_area_id')->nullable();
            $table->string('address');
            $table->string('street');
            $table->string('expiry_date')->nullable();
            $table->string('order_rank');
            $table->string('verified');
            $table->string('status');
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
