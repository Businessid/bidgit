<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users_branches', function (Blueprint $table) {
            $table->increments('pk_users_branches_id');
            $table->integer('fk_user_id');
            $table->string('name');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('location');
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
        Schema::dropIfExists('tbl_users_branches');
    }
}
