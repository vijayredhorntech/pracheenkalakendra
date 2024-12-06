<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_occupation');
            $table->string('member_designation');
            $table->string('member_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
};
