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
        Schema::create('logger_traffic', function (Blueprint $table) {
            $table->id();
            $table->string('web_name');
            $table->string('nats_webcam');
            $table->string('nats_web');
            $table->string('google_analytics');
            $table->string('visitor_ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logger_traffic');
    }
};
