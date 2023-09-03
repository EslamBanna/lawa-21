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
        Schema::create('semi_officers', function (Blueprint $table) {
            $table->id();
            $table->string('militray_id');
            $table->integer('degree_id');
            $table->string('name');
            $table->integer('kateba_id');
            // $table->foreignId('belongs_to')->constrained('Kataebs')->onDelete('cascade');
            $table->text('join_at')->nullable();
            $table->string('job');
            $table->string('specialist');
            $table->integer('gun_id');
            // $table->foreignId('gun_id')->constrained('guns')->onDelete('cascade');
            $table->string('gun_number', 10);
            $table->text('birthdate')->nullable();
            $table->string('street')->nullable();
            $table->string('village')->nullable();
            $table->string('country')->nullable();
            $table->string('goverment')->nullable();
            $table->string('hight')->nullable();
            $table->string('weight')->nullable();
            $table->string('phone1', 11)->nullable();
            $table->string('phone2', 11)->nullable();
            $table->text('notes')->nullable();
            $table->string('image')->nullable();
            $table->string('id_image')->nullable();
            $table->string('militray_image')->nullable();
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
        Schema::dropIfExists('semi_officers');
    }
};
