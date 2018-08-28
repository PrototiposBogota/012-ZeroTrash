<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'description' => 'Administrador',
        ]);

        DB::table('roles')->insert([
            'description' => 'Reciclador',
        ]);

        DB::table('roles')->insert([
            'description' => 'Conductor',
        ]);
    }
}
