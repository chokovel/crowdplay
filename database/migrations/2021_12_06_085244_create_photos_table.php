<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('album_id');
            $table->string('photo');
            $table->string('title');
            $table->string('slug');
            $table->string('size');
            $table->string('description');
            $table->timestamps();

            $table->foreign('album_id')
                ->references('id')
                ->on('albums')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->dropForeign(['album_id']);
        });
        Schema::dropIfExists('photos');
    }
}
