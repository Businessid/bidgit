<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users_investors', function (Blueprint $table) {
            $table->increments('pk_users_investors_id');
            $table->integer('fk_users_id');
            $table->string('percentage');
            $table->string('nationality');
            $table->string('mobile');
            $table->string('email');
            $table->string('id_number');
            $table->string('photo_id');
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
        Schema::dropIfExists('tbl_users_investors');
    }
}
