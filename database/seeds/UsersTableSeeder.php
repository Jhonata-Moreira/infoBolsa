<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::created([
                'name' => 'Jhonata',
                'email' => 'jhonata@gmail.com.br',
                'password' => Hash::make('12345678')
            ]);
    }
}
