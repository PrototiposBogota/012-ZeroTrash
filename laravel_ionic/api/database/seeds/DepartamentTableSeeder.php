<?php

use Illuminate\Database\Seeder;

class DepartamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departament')->insert([
            'description' => 'Cundinamarca',
            'id_country' => 1,
        ]);

        DB::table('departament')->insert([
            'description' => 'Antioquia',
            'id_country' => 1,
        ]);

        DB::table('departament')->insert([
            'description' => 'San Juan',
            'id_country' => 2,
        ]);
        DB::table('departament')->insert([
            'description' => 'Buenos Aires',
            'id_country' => 2,
        ]);

        DB::table('departament')->insert([
            'description' => 'Sau Paulo',
            'id_country' => 3,
        ]);

        DB::table('departament')->insert([
            'description' => 'Parana',
            'id_country' => 3,
        ]);
    }
}
