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
            'name'=> 'Marcelo Arana',
        'email'=>'marcelo15052000@gmail.com',
        'password'=> bcrypt('mar7g11912')])->assignRole('Admin');;
        User::factory(20)->create();
    }
}
