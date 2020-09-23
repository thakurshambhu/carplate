<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlateFramesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('plate_frames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vehicle_type_id');
            $table->string('media_url');
            $table->string('plate_number');
            $table->longText('description');
             $table->enum('is_deleted',['yes','no'])->default('no');
            $table->enum('is_active',['yes','no'])->default('yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('plate_frames');
    }

}
