<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_posts', function (Blueprint $table) {
            $table->increments('pk_post_id');
            $table->enum('profile_type',['company','user','bid']);
            $table->bigInteger('posted_id');
            $table->bigInteger('post_by');
            $table->bigInteger('post_to')->default(0);
            $table->longText('title')->nullable();
            $table->mediumText('hashtags')->nullable();
            $table->string('privacy')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('tbl_posts');
    }
}
