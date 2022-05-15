<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Criar usuário à partir do Model
        User::create([
            'name' => 'Lucas Bogo',
            'email' => 'lucasbogo93@gmail.com',
            'password' => bcrypt('cxryjg67'),
        ]);
    }
}
