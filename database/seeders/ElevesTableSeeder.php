<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElevesTableSeeder extends Seeder
{
    public function run()
    {
        $eleves = [
            ['nom' => 'Doe', 'prenom' => 'John', 'club_id' => 1, 
            'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Smith', 'prenom' => 'Jane', 'club_id' => 2, 
            'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Brown', 'prenom' => 'Charlie', 'club_id' => 3, 
            'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Black', 'prenom' => 'Alice', 'club_id' => 4, 
            'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('eleves')->insert($eleves);
    }
}
