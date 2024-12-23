<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnToTasksTable extends Migration
{
    public function up()
    {
        // Verificar si la columna ya existe antes de agregarla
        if (!Schema::hasColumn('tasks', 'status')) {
            Schema::table('tasks', function (Blueprint $table) {
                $table->string('status')->default('Pendiente')->after('due_date');
            });
        }
    }

    public function down()
    {
        // Eliminar la columna si existe
        if (Schema::hasColumn('tasks', 'status')) {
            Schema::table('tasks', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    }
}

