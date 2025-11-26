
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_id')->constrained('solicitudes')->onDelete('cascade');
            $table->string('estado')->default('Pendiente');
            $table->text('notas')->nullable();
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('oportunidades');
    }
};
