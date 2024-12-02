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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id(); // ID único para el método de pago
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relación con el usuario que ha configurado el método de pago
            $table->string('method_name'); // Nombre del método de pago (ej. 'Tarjeta de Crédito', 'PayPal', 'Transferencia Bancaria', 'Criptomoneda')
            $table->enum('method_type', ['credit_card', 'debit_card', 'paypal', 'bank_transfer', 'crypto', 'cash', 'other'])->default('credit_card'); // Tipo de método de pago
            $table->text('description')->nullable(); // Descripción adicional del método de pago (por ejemplo, tarifas asociadas, condiciones, etc.)
            $table->string('icon')->nullable(); // Ruta a un icono que representa el método de pago (opcional)
            $table->boolean('is_active')->default(true); // Indica si el método de pago está activo y habilitado
            $table->boolean('is_online')->default(true); // Indica si el método de pago está disponible en línea (por ejemplo, PayPal, tarjeta de crédito)
            $table->boolean('supports_recurring')->default(false); // Indica si el método de pago soporta pagos recurrentes
            $table->boolean('supports_refunds')->default(true); // Indica si el método de pago soporta reembolsos
            $table->decimal('transaction_fee', 8, 2)->nullable(); // Tarifa de transacción asociada al método de pago (por ejemplo, un porcentaje o tarifa fija)
            $table->timestamps(); // Fechas de creación y actualización del registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
