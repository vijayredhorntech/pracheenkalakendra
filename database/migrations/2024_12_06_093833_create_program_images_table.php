<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('program_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')
                ->constrained('programmes') // Assumes the table name is `programmes`
                ->onDelete('cascade'); // Delete images when the parent programme is deleted
            $table->string('programme_images');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('program_images');
    }
};
