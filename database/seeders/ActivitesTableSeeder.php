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
        ];

        DB::table('activites')->insert($activites);
    }
}
