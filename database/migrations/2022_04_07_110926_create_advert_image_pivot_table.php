<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertImagePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert_image', function (Blueprint $table) {
            $table->unsignedBigInteger('advert_id')->index();
            $table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
            $table->unsignedBigInteger('image_id')->index();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->primary(['advert_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advert_image');
    }
}
