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
            $table->string('name');
            $table->string('slug');
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->text('bio')->nullable();
            $table->text('designation')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('photo')->nullable();
            $table->boolean('is_key')->default(false);
            $table->tinyInteger('position')->default(1);

            $table->timestamps();

            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
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
