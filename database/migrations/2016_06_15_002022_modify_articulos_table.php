<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Añadir campo Slug a la tabla articulos
        Schema::table('articulos', function ($table) {
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar campo Slug a la tabla articulos
        Schema::table('articulos', function ($table){
            $table->dropColumn('slug');
        });
    }
}
