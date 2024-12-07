<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email');
            $table->integer('mobile')->nullable();
            $table->longText('subject')->nullable();
            $table->enum('type', ['enquiry', 'subscription'])->default('enquiry');
            $table->enum('status' , ['pending', 'resolved','notResolved'])->default('pending');
            $table->longText('remark')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
