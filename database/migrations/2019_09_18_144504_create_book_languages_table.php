<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name',255);
            $table->char('app_name',255)->nullable();
            $table->char('flag',255)->nullable();
            $table->char('abbr',255)->nullable();
            $table->char('script',255)->nullable();
            $table->char('native',255)->nullable();
            $table->char('active',255)->nullable();
            $table->char('default',255)->nullable();
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
        Schema::dropIfExists('book_languages');
    }
}
