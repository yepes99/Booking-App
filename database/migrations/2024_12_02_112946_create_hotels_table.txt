<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id(); // Columna id que es la clave primaria
            $table->string('name'); // Nombre del hotel
            $table->string('email')->unique(); // Email único del hotel
            $table->string('phone'); // Teléfono del hotel
            $table->string('address'); // Dirección del hotel
            $table->string('country'); // País donde se encuentra el hotel
            $table->string('city'); // Ciudad donde se encuentra el hotel
            $table->text('description')->nullable(); // Descripción del hotel (opcional)
            $table->integer('star_rating')->default(3); // Estrellas del hotel, valor por defecto 3
            $table->decimal('rating', 3, 1)->nullable(); // Calificación del hotel (opcional)
            $table->decimal('price_per_night', 8, 2)->default(0); // Precio por noche, valor por defecto 0
            $table->text('amenities')->nullable(); // Servicios ofrecidos por el hotel (opcional)
            $table->decimal('latitude', 10, 8)->nullable(); // Latitud (opcional)
            $table->decimal('longitude', 11, 8)->nullable(); // Longitud (opcional)
            $table->time('check_in_time')->nullable(); // Hora de entrada (opcional)
            $table->time('check_out_time')->nullable(); // Hora de salida (opcional)
            $table->enum('status', ['active', 'inactive', 'under_maintenance'])->default('active'); // Estado del hotel
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // Relación con el usuario que creó el registro
            $table->string('image')->nullable(); // Imagen principal del hotel (opcional)
            $table->json('gallery')->nullable(); // Galería de imágenes (opcional)
            $table->timestamps(); // Timestamps: created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
