<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Oussama',
            'email' => 'oussama@mobidal.com',
            'password' => '$2y$10$uYwLwlbzBw3N8rWGRrD.OOiOVTLTswJi1VrGSkFvTuDY0Yw7buF0O',
        ]);
        User::create([
            'name' => 'Youcef',
            'email' => 'youcef@mobidal.com',
            'password' => '$2y$10$uYwLwlbzBw3N8rWGRrD.OOiOVTLTswJi1VrGSkFvTuDY0Yw7buF0O',
        ]);
        User::create([
            'name' => 'Aissam',
            'email' => 'aissam@mobidal.com',
            'password' => '$2y$10$uYwLwlbzBw3N8rWGRrD.OOiOVTLTswJi1VrGSkFvTuDY0Yw7buF0O',
        ]);
    }
}
