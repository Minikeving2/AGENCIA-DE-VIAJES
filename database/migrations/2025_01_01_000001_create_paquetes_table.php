
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('destino')->nullable();
            $table->integer('duracion')->nullable();
            $table->decimal('precio', 12, 2)->default(0);
            $table->text('descripcion')->nullable();
            $table->json('imagenes')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('paquetes');
    }
};
