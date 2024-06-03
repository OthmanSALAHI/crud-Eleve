<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElevesTableSeeder extends Seeder
{
    public function run()
    {
        $eleves = [
            ['nom' => 'Doe', 'prenom' => 'John', 'club_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Smith', 'prenom' => 'Jane', 'club_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Brown', 'prenom' => 'Charlie', 'club_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Black', 'prenom' => 'Alice', 'club_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'White', 'prenom' => 'Bob', 'club_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Green', 'prenom' => 'Emily', 'club_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Yellow', 'prenom' => 'David', 'club_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Blue', 'prenom' => 'Sarah', 'club_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Gray', 'prenom' => 'James', 'club_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Purple', 'prenom' => 'Laura', 'club_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Orange', 'prenom' => 'Tom', 'club_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Pink', 'prenom' => 'Anna', 'club_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Red', 'prenom' => 'Mike', 'club_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Cyan', 'prenom' => 'Lucy', 'club_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Violet', 'prenom' => 'George', 'club_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Magenta', 'prenom' => 'Sophie', 'club_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Olive', 'prenom' => 'Harry', 'club_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Teal', 'prenom' => 'Mia', 'club_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Silver', 'prenom' => 'Oscar', 'club_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Gold', 'prenom' => 'Grace', 'club_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Copper', 'prenom' => 'Henry', 'club_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Bronze', 'prenom' => 'Chloe', 'club_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Azure', 'prenom' => 'Jack', 'club_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Indigo', 'prenom' => 'Isla', 'club_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Turquoise', 'prenom' => 'Leo', 'club_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ];
        

        DB::table('eleves')->insert($eleves);
    }
}
