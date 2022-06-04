<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
// Azienda x
// Stazione di partenza x
// Stazione di arrivo x
// Orario di partenza  
// Orario di arrivo
// Codice Treno      x
// Numero Carrozze  x
// In orario  x
// Cancellato   x
            $table->id();
            $table->timestamps();
            $table->string('azienda', 30);
            $table->date('data_treno', 0);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->string('codice_treno', 6)->unique();
            $table->tinyInteger('carrozze')->default(1);
            $table->time('orario_partenza', 0);
            $table->time('orario_arrivo', 0);
            
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
