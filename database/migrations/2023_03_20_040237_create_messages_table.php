<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->timestamp('created_at')->useCurrent();
            $table->unsignedBigInteger('user_id') -> nullable();    
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
