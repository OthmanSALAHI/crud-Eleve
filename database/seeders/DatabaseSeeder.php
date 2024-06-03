<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\EleveActiviteSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            ClubsTableSeeder::class,
            ElevesTableSeeder::class,
            ActivitesTableSeeder::class,
            EleveActiviteSeeder::class,
        ]);
    }
}
