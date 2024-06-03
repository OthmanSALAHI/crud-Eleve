<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleveActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['activite_id' => 1, 'eleve_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 22, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 22, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 2, 'eleve_id' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 3, 'eleve_id' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 4, 'eleve_id' => 22, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 5, 'eleve_id' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 6, 'eleve_id' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['activite_id' => 1, 'eleve_id' => 25, 'created_at' => now(), 'updated_at' => now()],
        ];
        

        DB::table('activite_eleve')->insert($data);
    }
}
