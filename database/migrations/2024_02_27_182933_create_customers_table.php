<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('number');
            $table->date('date');
            $table->text('country');
            $table->string('image');
            $table->text('comment')->nullable();
            $table->json('sports');
            $table->enum('gender', ['male', 'female']);
            $table->timestamps();
        });
    }
};
