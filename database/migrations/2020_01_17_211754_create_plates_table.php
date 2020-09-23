<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vehicle_cat')->nullable();
            $table->integer('media_url')->nullable();
            $table->string('plate_number')->nullable();
            $table->string('plate_title')->nullable();
            $table->string('plate_price')->nullable();
            $table->longtext('description')->nullable();
            $table->enum('is_featured',['yes','no'])->default('no');
            $table->enum('top',['yes','no'])->default('no');
            $table->enum('trending',['yes','no'])->default('no');
            $table->enum('is_deleted',['yes','no'])->default('no');
            $table->enum('is_publised',['publish','unpublish'])->default('publish');
            $table->timestamps();
        });
        Schema::table('plates', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plates');
    }
}
