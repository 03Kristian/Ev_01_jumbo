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
        Schema::create('group_times', function (Blueprint $table) {
            $table->id();
            $table->Time('hora_lunes');
            $table->Time('hora_martes');
            $table->Time('hora_miercoles');
            $table->Time('hora_jueves');
            $table->Time('hora_viernes');

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
        Schema::dropIfExists('group_times');
    }
};
