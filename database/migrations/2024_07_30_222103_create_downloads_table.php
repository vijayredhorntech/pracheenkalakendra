<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('new_or_not');
            $table->string('download_file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('downloads');
    }
};
