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
        Schema::create('speakers', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->string('title');
            $table->string('name')->unique();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('slug')->nullable();
            $table->text('bio')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('image')->nullable();

            $table->timestamps();


            // $table->fullText(['first_name', 'last_name', 'middle_name', 'bio', 'designation', 'organization']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speakers');
    }
};
