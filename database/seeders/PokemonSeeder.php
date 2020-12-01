<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert(
            [

                [
                    'nom'=>'Draocfeu',
                    'type_id'=>1,
                    'image'=>'dracofeu.png',
                    'niveau'=>'56',
                ],
                [
                    'nom'=>'Tortant',
                    'type_id'=>2,
                    'image'=>'tortank.png',
                    'niveau'=>'20',
                ],
                [
                    'nom'=>'Herbivor',
                    'type_id'=>3,
                    'image'=>'herbe.png',
                    'niveau'=>'56',
                ],
            ],
        );
    }
}
