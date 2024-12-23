<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStatusCheckInTasksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Modificar la tabla tasks
        Schema::table('tasks', function (Blueprint $table) {
            // Eliminar la columna existente si tiene restricciones previas
            $table->dropColumn('status');
        });

        Schema::table('tasks', function (Blueprint $table) {
            // Agregar la columna con la nueva restricción CHECK
            $table->string('status')
                  ->default('Pendiente')
                  ->check("status IN ('Pendiente', 'En progreso', 'Completado')")
                  ->after('due_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revertir el cambio si es necesario
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('status')->default('Pendiente'); // Sin restricción CHECK
        });
    }
}

