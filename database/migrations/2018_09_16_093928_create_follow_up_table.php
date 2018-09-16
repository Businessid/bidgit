<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowUpTable extends Migration
{
    /**tbl_followup
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_followup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('followed_type',['user','company','bid']);
            $table->integer('followed_id');
            $table->enum('follower_type',['user','company','bid']);
            $table->bigInteger('follower_id');

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
        Schema::dropIfExists('tbl_followup');
    }
}
