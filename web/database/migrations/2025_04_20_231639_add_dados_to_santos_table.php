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
        Schema::table('santos', function (Blueprint $table) {
            $table->string('nome', 100);
            $table->string('feito', 200);
            $table->enum('status', ['Santo', 'Beato']);
            $table->date('data_liturgica');
            $table->text('historia');
            $table->text('contribuicao');
            $table->text('milagres');
            $table->string('pais', 100);
            $table->string('cidade', 100);
            $table->string('seculo', 100);
            $table->enum('vocacao', ['Leigos Casados', 'Religioso(a)', 'Sacerdote', 'Mártires', 'trabalhador(a)', 'Profissionais', 'Jovens', 'Virgem', 'Doutor(a) da igreja']);
            $table->text('Festa');
            $table->text('Oração');
            $table->text('fontes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('santos', function (Blueprint $table) {
            //
        });
    }
};
