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
        Schema::create('plan_kateaps', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_id');
            $table->integer('kateapa_id');
            $table->enum('day', [1,2,3,4,5,6,7, '-'])->default('-');
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
        Schema::dropIfExists('plan_kateaps');
    }
};
