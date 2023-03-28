<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('frame_icons', function (Blueprint $table) {
            $table->id();
            $table->enum('mode', ['solo', 'duo', 'trio']);
            $table->string('event_name');
            $table->string('icon_path');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->softDeletes();
        });

        Schema::create('code_auth', function (Blueprint $table) {
            $table->id();
            $table->string('event_code');
            $table->string('event_name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
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
        Schema::dropIfExists('frame_icons');
        Schema::dropIfExists('frame_icon');
        Schema::dropIfExists('code_auth');
    }
};
