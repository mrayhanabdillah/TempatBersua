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
        Schema::create('restos', function (Blueprint $table) {
            $table->id();
            $table->string('namaresto');
            $table->string('district');
            $table->string('address');
            $table->time('open');
            $table->time('close');
            $table->string('price');
            $table->string('upto');
            $table->string('thumbnail');
            $table->string('content');
            $table->string('menu');
            $table->string('category');
            $table->string('status');
            $table->string('rekomen');
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
        Schema::dropIfExists('restos');
    }
};
