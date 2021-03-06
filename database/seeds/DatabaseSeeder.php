<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompaniasTableSeeder::class,
            RolesRASICTableSeeder::class,
            RolesTableSeeder::class,
            TrabajosTableSeeder::class,
            UsuariosTableSeeder::class,
            EnfoquesTableSeeder::class
        ]);
    }
}

