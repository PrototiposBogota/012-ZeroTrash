<?php

use Illuminate\Database\Seeder;

class NoveltyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('novelty_type')->insert([
            'description' => 'Carro Desconpuesto',
        ]);

        DB::table('novelty_type')->insert([
            'description' => 'Carro Lleno',
        ]);

        DB::table('novelty_type')->insert([
            'description' => 'Escombros',
        ]);

        DB::table('novelty_type')->insert([
            'description' => 'Novedad Sin Categoria',
        ]);
    }
}
