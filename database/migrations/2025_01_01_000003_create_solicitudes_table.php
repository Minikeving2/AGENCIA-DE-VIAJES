
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('paquete_id')->constrained('paquetes')->onDelete('cascade');
            $table->text('preferencias')->nullable();
            $table->integer('viajeros')->default(1);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->text('notas')->nullable();
            $table->string('estado')->default('Pendiente');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('solicitudes');
    }
};
