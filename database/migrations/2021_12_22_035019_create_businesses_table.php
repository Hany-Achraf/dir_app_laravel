<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('rating')->default(0);
            $table->string('thumbnail_url');
            $table->string('cover_img_url');
            $table->text('description')->nullable();
            $table->string('phone_no');
            $table->string('address');
            $table->text('location_on_map')->nullable();
            $table->string('working_time');
            $table->string('website_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->bigInteger('destination_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
