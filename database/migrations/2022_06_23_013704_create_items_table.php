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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', '32');
            $table->string('description', '255')->nullable();
            $table->string('image', '255')->nullable();
            $table->integer('required_forge_level')->default(1);
            $table->foreignId('required_ore_id')->constrained('ore');
            $table->integer('required_ore_quantity')->default(1);
            $table->integer('required_seconds_to_forge')->default(30);
            $table->integer('sale_price')->default(0);
            $table->integer('experience_gain')->default(0);
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
        Schema::dropIfExists('items');
    }
};
