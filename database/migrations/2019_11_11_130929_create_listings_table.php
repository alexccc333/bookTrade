<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('book_id')->unsigned()->index();

            $table->string('name')->index();//+
            $table->string('picture')->default('no-img.jpg');//
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('condition')->nullable();
            $table->integer('digital')->nullable();
            $table->smallInteger('limited_edition')->default(0);
            $table->smallInteger('delivery')->default(0);
            $table->smallInteger('sell_negotiate')->default(0);
            $table->smallInteger('trade')->default(0);
            $table->smallInteger('trade_negotiate')->default(0);
            $table->text('trade_list')->nullable();
            $table->smallInteger('sell')->default(0);
            $table->integer('delivery_price')->default(0);
            $table->smallInteger('payment')->default(0);
            $table->integer('status')->default(0);
            $table->integer('clicks')->default(0);
            $table->timestamps();

             $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
