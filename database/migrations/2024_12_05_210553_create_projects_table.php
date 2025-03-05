<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('image_1')->nullable();
            $table->string('detail')->nullable();


            $table->string('country'); // 
            $table->string('location')->nullable(); //
            $table->string('land')->nullable(); //
            $table->string('land_count')->nullable(); //

            $table->string('map_1')->nullable(); //
            $table->string('map_2')->nullable(); //



            $table->string('video_1')->nullable(); //
            $table->string('video_2')->nullable(); //
            $table->string('video_3')->nullable(); //
            $table->string('video_4')->nullable(); //
            $table->string('video_5')->nullable(); //
            $table->string('video_6')->nullable(); //
            $table->string('video_7')->nullable(); //
            $table->string('video_8')->nullable(); //
            $table->string('video_9')->nullable(); //
            $table->string('video_10')->nullable(); //


            for ($i = 1; $i <= 10; $i++) {
               
                $table->string("tourist_$i","30")->nullable(); //
                $table->string("tourist_image_$i","50")->nullable(); //
            }
            for ($i = 1; $i <= 20; $i++) {
                $table->longText("photo_$i")->nullable(); //
               
                $table->longText("subproject_$i")->nullable(); //
                $table->longText("subproject_image_$i")->nullable();
            }


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
