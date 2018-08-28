<?php

use Illuminate\Database\Seeder;

class RecyclingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recycling_type')->insert([
            'description' => 'Aluminio',
        ]);

        DB::table('recycling_type')->insert([
            'description' => 'Papel',
        ]);

        DB::table('recycling_type')->insert([
            'description' => 'Plástico',
        ]);

        DB::table('recycling_type')->insert([
            'description' => 'Vidrio',
        ]);

        DB::table('recycling_type')->insert([
            'description' => 'Equipos electrónicos',
        ]);


        DB::table('recycling_type')->insert([
            'description' => 'Cartuchos de tinta y toner',
        ]);

        DB::table('recycling_type')->insert([
            'description' => 'Pinos',
        ]);
    }
}
