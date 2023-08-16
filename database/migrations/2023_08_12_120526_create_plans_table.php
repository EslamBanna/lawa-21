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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->date('start_plan');
            $table->date('end_plan')->nullable();
            $table->enum('type_of_plan', ['التزام' , 'مخطط مرور القائد' , 'مرور' , 'تعليمات', 'تحركات'])->default('التزام');
            $table->text('subject')->nullable();
            $table->string('desction')->nullable();
            $table->text('notes');
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
        Schema::dropIfExists('plans');
    }
};
