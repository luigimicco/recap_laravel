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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN', 13)->unique();
            $table->string('title', 200);
            $table->string('author', 100)->default('');
            $table->integer('pages')->default(0);
            $table->decimal('price', 5, 2)->default(0);
            $table->string('thumb')->nullable();
            $table->integer('year');
            $table->boolean('soldout')->default(false);
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
        Schema::dropIfExists('books');
    }
};
