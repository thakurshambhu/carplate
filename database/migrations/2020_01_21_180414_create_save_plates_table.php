<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_plates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guest_id')->nullable();
            $table->enum('status',['like','cart'])->nullable();
            $table->timestamps();
        });

        Schema::table('save_plates', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id')->nullable()->unsigned();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable()->unsigned();
        });

        Schema::table('save_plates', function (Blueprint $table) {
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
        Schema::dropIfExists('save_plates');
    }
}
