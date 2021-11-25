<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_urls', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->bigInteger('business_id')->unsigned();
            $table->timestamps();

            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_urls');
    }
}
