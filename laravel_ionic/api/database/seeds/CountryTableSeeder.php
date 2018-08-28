<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            'description' => 'Colombia',
        ]);

        DB::table('country')->insert([
            'description' => 'Argentina',
        ]);

        DB::table('country')->insert([
            'description' => 'Brasil',
        ]);
    }
}
