<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->text('appointment_adress');
            $table->date('appointment_date');
            $table->string('appointment_status')->nullable();
            $table->string('customer_name');
            $table->string('customer_surname');
            $table->string('customer_email');
            $table->text('customer_adress');
            $table->string('customer_phoneNumber');
            $table->string('eta')->nullable();
            $table->foreignId('api_id')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
