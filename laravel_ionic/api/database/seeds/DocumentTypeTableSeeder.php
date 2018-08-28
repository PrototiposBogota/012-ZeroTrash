<?php

use Illuminate\Database\Seeder;

class DocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_type')->insert([
            'description' => 'Tarjeta de Identidad',
        ]);

        DB::table('document_type')->insert([
            'description' => 'Cedula de Ciudadania',
        ]);

        DB::table('document_type')->insert([
            'description' => 'Cedula Extrangeria',
        ]);
    }
}
