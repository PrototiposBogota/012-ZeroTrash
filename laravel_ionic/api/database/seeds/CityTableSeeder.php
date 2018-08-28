<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            'description' => 'Bogota',
            'id_departament' => 1,
        ]);

        DB::table('city')->insert([
            'description' => 'Bojaca',
            'id_departament' => 1,
        ]);

        DB::table('city')->insert([
            'description' => 'Medellin',
            'id_departament' => 2,
        ]);
        DB::table('city')->insert([
            'description' => 'Andes',
            'id_departament' => 2,
        ]);

        DB::table('city')->insert([
            'description' => 'Anta',
            'id_departament' => 3,
        ]);

        DB::table('city')->insert([
            'description' => 'Cachi',
            'id_departament' => 3,
        ]);

        DB::table('city')->insert([
            'description' => 'Baradero',
            'id_departament' => 4,
        ]);

        DB::table('city')->insert([
            'description' => 'Bolivar',
            'id_departament' => 4,
        ]);

        DB::table('city')->insert([
            'description' => 'Agua Dose',
            'id_departament' => 5,
        ]);
        DB::table('city')->insert([
            'description' => 'Arabuta',
            'id_departament' => 5,
        ]);

        DB::table('city')->insert([
            'description' => 'Abatia',
            'id_departament' => 6,
        ]);

        DB::table('city')->insert([
            'description' => 'Andira',
            'id_departament' => 6,
        ]);
    }
}
