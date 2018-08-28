<?php

use Illuminate\Database\Seeder;

class LocalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locality')->insert([
            'description' => 'Chapinero',
            'id_city' => 1,
        ]);

        DB::table('locality')->insert([
            'description' => 'Rafael Uribe Uribe',
            'id_city' => 1,
        ]);

        DB::table('locality')->insert([
            'description' => 'Gaitan',
            'id_city' => 2,
        ]);
        DB::table('locality')->insert([
            'description' => 'San Agustin',
            'id_city' => 2,
        ]);

        DB::table('locality')->insert([
            'description' => 'Comuna 7',
            'id_city' => 3,
        ]);

        DB::table('locality')->insert([
            'description' => 'Comuna 13',
            'id_city' => 3,
        ]);

        DB::table('locality')->insert([
            'description' => 'María Auxiliadora',
            'id_city' => 4,
        ]);
        DB::table('locality')->insert([
            'description' => 'San Miguel',
            'id_city' => 4,
        ]);
    }
}
