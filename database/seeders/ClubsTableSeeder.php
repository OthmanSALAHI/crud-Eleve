<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    public function run()
    {
        $clubs = [
            ['nom' => 'Football Club', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Music Club', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Dance Club', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Basketball Club', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Chess Club', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Science Club', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('clubs')->insert($clubs);
    }
}
