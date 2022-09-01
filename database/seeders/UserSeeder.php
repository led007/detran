<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'nome' => 'Administrador',
            'email' => 'lucas@detran.com',
            'password' => bcrypt('lucas@123'),
            'cargo'=> 'Service Desk 1A',
            'foto' => '',

        ]);
    }
}