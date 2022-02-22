<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('message');
            $table->string('params');
        });
    }

    /**
     * Reverse the migrations.1
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
