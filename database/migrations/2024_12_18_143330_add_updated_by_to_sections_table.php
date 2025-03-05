<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedByToSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sections', function (Blueprint $table) {

            $table->unsignedBigInteger('updated_by')->nullable(); // 
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null'); // Relación con la tabla users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropForeign(['updated_by']); // Elimina la relación de clave foránea
            $table->dropColumn('updated_by');    // Elimina la columna
        });
    }
}
