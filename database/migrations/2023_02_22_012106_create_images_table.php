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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('fname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country')->default('Nepal');
            $table->text('image');
            $table->tinyInteger('status')->default('0');
            $table->string('total_price')->default('0');
            $table->string('final_price')->default('0');
            $table->string('tracking_no')->nullable();
            $table->tinyInteger('discount')->default('5');
            $table->tinyInteger('tax')->default('13');
            $table->string('message')->nullable();
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
        Schema::dropIfExists('images');
    }
};
