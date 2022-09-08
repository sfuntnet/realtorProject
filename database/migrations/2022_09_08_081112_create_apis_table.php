<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('apis', function (Blueprint $table) {
            $table->id();
            $table->text('api_url');
            $table->foreignId('appointment_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apis');
    }
};
