<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plate_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('media_url')->nullable();
            $table->enum('is_deleted',['yes','no'])->default('no');
            $table->enum('is_active',['yes','no'])->default('yes');
            $table->timestamps();
        });

        Schema::table('plate_images', function (Blueprint $table) {
            $table->unsignedBigInteger('plate_id')->after('id');
            $table->foreign('plate_id')->references('id')->on('plates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plate_images');
    }
}
