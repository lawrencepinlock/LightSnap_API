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
        // Schema::table('messages', function (Blueprint $table) {
        //     $table->softDeletes()->after('updated_at');
        // });
        
        // Schema::table('events', function (Blueprint $table) {
        //     $table->softDeletes()->after('updated_at');
        // });

        Schema::table('event_images', function (Blueprint $table) {
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            // $table->softDeletes();
        });
        
        Schema::table('users', function (Blueprint $table) {
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
        // Schema::table('messages', function (Blueprint $table) {
        //     $table->dropColumn('deleted_at');
        // });

        // Schema::table('events', function (Blueprint $table) {
        //     $table->dropColumn('deleted_at');
        // });

        Schema::table('event_images', function (Blueprint $table) {
            Schema::dropIfExists('updated_at');
            Schema::dropIfExists('deleted_at');
        });

        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('created_at');
            Schema::dropIfExists('updated_at');
            Schema::dropIfExists('deleted_at');
        });
    }
};
