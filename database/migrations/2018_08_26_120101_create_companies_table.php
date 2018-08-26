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
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('activity')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone');
            $table->string('legal_status')->nullable();
            $table->text('registration_number')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_file');
            $table->string('headline');
            $table->string('profile_url')->unique()->nullable();
            $table->string('profile_image');
            $table->string('cover_image');
            $table->string('website');
            $table->string('nationality')->nullable();
            $table->string('pobox');
            $table->string('fk_country_id')->nullable();
            $table->string('fk_city_id')->nullable();
            $table->string('fk_area_id')->nullable();
            $table->string('address');
            $table->string('street');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('companies');
    }
}
