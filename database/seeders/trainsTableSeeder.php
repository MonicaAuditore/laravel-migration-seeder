<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\train;

//Helpers
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 2; $i++) {
        $train = new train();
        $train->Azienda = 'Trenitalia';
        $train->Stazione_di_partenza = 'Cuneo';
        $train->Stazione_di_arrivo = 'Firenze';
        $train->Orario_di_partenza = '09:51:00';
        $train->Orario_di_arrivo = '20:51:00';
        $train->Codice_treno = 4536485;
        $train->Numero_carrozze = 1;
        $train->In_orario = 0;
        $train->Cancellato = 1;
        $train->Data = '2023-03-13';
        $train->classe = $faker->buildingNumber();
        $train->save();
        }
    }
}
