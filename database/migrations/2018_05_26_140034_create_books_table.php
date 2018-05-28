<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            $table->string('title')->nullable()->default(null);
            $table->string('author')->nullable()->default(null);
            $table->text('image_path')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('body')->nullable()->default(null);
            $table->text('vendor_link')->nullable()->default(null);
            $table->integer('rating')->nullable()->default(null);
            $table->integer('rating_read_again')->nullable()->default(null);
            $table->boolean('wishlist')->default(false);
            $table->integer('wishlist_position')->nullable()->default(null);
            $table->timestamp('started_at')->nullable()->default(null);
            $table->timestamp('finished_at')->nullable()->default(null);
            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}
