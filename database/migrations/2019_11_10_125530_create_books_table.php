<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('image')->default('no-img.jpg');
            $table->string('cover')->default('no-img-cover.jpg');
            $table->text('description')->nullable();
            $table->string('page_extent')->nullable();
            $table->string('data_release')->nullable();
            $table->integer('pegi')->nullable();
            $table->text('tags')->nullable();
            $table->string('ISBN')->nullable();
            $table->bigInteger('publisher_id')->unsigned()->nullable();
            $table->bigInteger('distributor_id')->unsigned()->nullable();
            $table->bigInteger('book_language_id')->unsigned()->nullable();

            $table->foreign('book_language_id')->references('id')->on('book_languages');
            $table->foreign('distributor_id')->references('id')->on('distributors');
            $table->foreign('publisher_id')->references('id')->on('publishers');

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
