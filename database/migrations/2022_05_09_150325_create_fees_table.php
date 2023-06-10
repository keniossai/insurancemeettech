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
        Schema::create('fees', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('period_id')->nullable()->constrained();
            $table->integer('amount');
            $table->integer('min_age')->nullable();
            $table->integer('max_age')->nullable();
            $table->timestamps();

            $table->unique(['period_id', 'category_id']);
            $table->unique(['period_id', 'min_age']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
};
