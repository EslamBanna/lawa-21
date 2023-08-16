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
        Schema::create('soliders', function (Blueprint $table) {
            $table->id();
            $table->string('militray_id');
            $table->string('degree')->default('جندي');
            $table->string('name');
            $table->integer('kateba_id');
            // $table->foreignId('belongs_to')->constrained('Kataebs')->onDelete('cascade');
            $table->enum('years_of_services',['1', '1.5', '2' , '2.5', '3'])->default('1');
            $table->date('join_at')->nullable();
            $table->string('specialist');
            $table->string('certification')->nullable();
            $table->integer('gun_id');
            // $table->foreignId('gun_id')->constrained('guns')->onDelete('cascade');
            $table->date('birthdate')->nullable();
            $table->string('street')->nullable();
            $table->string('village')->nullable();
            $table->string('country')->nullable();
            $table->string('goverment')->nullable();
            $table->string('hight')->nullable();
            $table->string('weight')->nullable();
            $table->string('tamam')->nullable();
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
        Schema::dropIfExists('soliders');
    }
};
