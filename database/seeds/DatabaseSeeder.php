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
        
        $this->call(UsuariosSeeder::class);
        $this->call(NoticiasSeeder::class);
        $this->call(CaminhoesSeeder::class);
        $this->call(FuncionariosSeeder::class);
        $this->call(RotasSeeder::class);
        
    }
}
