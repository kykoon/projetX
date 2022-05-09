<?php

namespace Database\Seeders;

use App\Models\{ Client, Categorie};
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
        // \App\Models\User::factory(10)->create();
        Categorie::factory()
        ->has(Client::factory()->count(4))
        ->count(10)
        ->create();
 

    }
}
