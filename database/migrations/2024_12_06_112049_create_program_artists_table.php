<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('program_artists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')->constrained('programmes') // Assumes the table name is `programmes`
            ->onDelete('cascade');;
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_artists');
    }
};
