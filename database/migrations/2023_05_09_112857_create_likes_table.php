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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id');
            $table->foreignID('resto_id');
            $table->enum('liked',['yes','no']);
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("resto_id")->references("id")->on("restos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
