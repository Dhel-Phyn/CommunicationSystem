<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('senderId')->nullable();
            $table->text('text');
            $table->string('phone');
            $table->string('email');
            $table->integer('recipientId');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    // Reverse migrations
    public function down():void
    {
        Schema::dropIfExists('messages');
    }
};