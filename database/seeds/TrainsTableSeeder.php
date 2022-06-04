<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $train = new Train();

        $train->azienda = "Fiat";
        $train->data_treno = "2022-06-04";
        $train->stazione_partenza = "Torino Porta Nuova";
        $train->stazione_arrivo = "Roma Termini";
        $train->codice_treno = "178may";
        $train->carrozze = 2;
        $train->in_orario = false;
        $train->cancellato = true;
        
        $train->orario_arrivo = "10:30:00" ;
        $train->orario_partenza = "15:20:00" ; 
        $train->save();
    }
}
