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
        factory(App\models\Campagne::class, 15)->create();
        factory(App\models\Cotisation::class, 200)->create();
    }
}
