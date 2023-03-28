<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            // $table->id();
            // $table->string('event_name');
            // $table->enum('mode', ['solo', 'duo', 'trio']);
            // $table->timestamps();
            // $table->softDeletes();
        });

        Schema::table('event_images', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('event_id');
            // $table->foreign('event_id')->references('id')->on('events');
            // $table->string('image_path');
            // $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_and_images_tables');
        Schema::dropIfExists('event_images');
        Schema::dropIfExists('events');

    }

    
};
