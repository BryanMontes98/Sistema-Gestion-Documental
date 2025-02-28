<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_documentos', function (Blueprint $table) {
            $table->foreignId('documento_id')
                ->constrained('documentos', 'id_documento')
                ->onDelete('cascade');
            $table->string('nombre_documento');
            $table->text('descripcion');
            $table->string('area');
            $table->date('fecha_vigencia');
            $table->string('tipo_documento');
            $table->string('documento');
            $table->integer('version');
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
        Schema::dropIfExists('historial_documentos');
    }
}
