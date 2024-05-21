<?php

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
        ];

        DB::table('activite_eleve')->insert($data);
    }
}
