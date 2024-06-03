<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitesTableSeeder extends Seeder
{
    public function run()
    {
        $activites = [
            [
                'description' => 'Football Tournament',
                'date_debut' => '2024-06-01',
                'nombreJours' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Science Fair',
                'date_debut' => '2024-06-10',
                'nombreJours' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Music Festival',
                'date_debut' => '2024-07-01',
                'nombreJours' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Art Exhibition',
                'date_debut' => '2024-07-10',
                'nombreJours' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Coding Bootcamp',
                'date_debut' => '2024-08-01',
                'nombreJours' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Dance Competition',
                'date_debut' => '2024-08-15',
                'nombreJours' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Chess Tournament',
                'date_debut' => '2024-09-01',
                'nombreJours' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Math Olympiad',
                'date_debut' => '2024-09-10',
                'nombreJours' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Debate Competition',
                'date_debut' => '2024-09-20',
                'nombreJours' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Photography Contest',
                'date_debut' => '2024-10-01',
                'nombreJours' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Robotics Workshop',
                'date_debut' => '2024-10-10',
                'nombreJours' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Cooking Class',
                'date_debut' => '2024-10-20',
                'nombreJours' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Literature Conference',
                'date_debut' => '2024-11-01',
                'nombreJours' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Environmental Summit',
                'date_debut' => '2024-11-10',
                'nombreJours' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('activites')->insert($activites);
    }
}
