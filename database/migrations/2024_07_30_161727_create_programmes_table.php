<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('programme_title');
            $table->longText('programme_description');
            $table->string('programme_location');
            $table->string('programme_image')->nullable();
            $table->date('programme_date');
            $table->time('programme_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programmes');
    }
};
