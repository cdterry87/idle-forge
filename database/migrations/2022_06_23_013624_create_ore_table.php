<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ore', function (Blueprint $table) {
            $table->id();
            $table->string('name', '32');
            $table->string('description', '255')->nullable();
            $table->string('image', '255')->nullable();
            $table->integer('required_user_level')->default(1);
            $table->integer('required_seconds_to_mine')->default(30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ore');
    }
};
