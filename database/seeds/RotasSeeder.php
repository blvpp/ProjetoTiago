<?php

use Illuminate\Database\Seeder;

class RotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rotas::class, 10)
        	->create();
    }
}
