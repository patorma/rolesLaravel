<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin = User::create([
            'name' => 'admin paula',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => 1,
            //'codigo' => 'adm1',
        ]);
        $useradmin = User::create([
            'name' => 'super admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => 2,
            //'codigo' => 'admin2',
        ]);

        $useradmin = User::create([
            'name' => 'el moderador',
            'email' => 'moderadors@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => 3,
            //'codigo' => 'admin3',
        ]);

        $user1 = User::create([
            'name' => 'Usuario Marcos',
            'email' => 'marcos@gmail.com',
            'password' => Hash::make('marcos'),
            'tipo' => 4,
            //'codigo' => 'casa1',
        ]);
    }
}
