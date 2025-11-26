<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cotizacion_pdfs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_id')->constrained('solicitudes');
            $table->string('url_archivo')->nullable();
            $table->dateTime('fecha_emision')->nullable();
            $table->integer('vigencia')->default(7);
            $table->string('moneda',10)->default('COP');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cotizacion_pdfs');
    }
};
