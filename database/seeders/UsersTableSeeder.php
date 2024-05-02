<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {

        $password = bcrypt('12345678'); // Hash the password once since it's the same for both users

        $users = [
            [
                'name' => 'Евсей',
                'middle_name' => 'Олегович',
                'last_name' => 'Ярошенко',
                'phone' => '9219245228',
                'email' => 'artmiru@gmail.com',
                'password' => $password, // Use the hashed password
            ],
            [
                'name' => 'Константин',
                'middle_name' => 'Константинович',
                'last_name' => 'Константинов',
                'phone' => '9215778927',
                'email' => 'kostyakk@mail.ru',
                'password' => $password, // Use the same hashed password
            ],
            [
                'name' => 'Екатерина',
                'middle_name' => '',
                'last_name' => 'Муравина',
                'phone' => '9818887546',
                'email' => '',
                'password' => $password, // Use the same hashed password
            ],
            [
                'name' => 'Алексей',
                'middle_name' => 'Викторович',
                'last_name' => 'Добровольский',
                'phone' => '9062595116',
                'email' => '',
                'password' => $password, // Use the same hashed password
            ],
            [
                'name' => 'Илья',
                'middle_name' => '',
                'last_name' => 'Злобин',
                'phone' => '9533444990',
                'email' => '',
                'password' => $password, // Use the same hashed password
            ],
            [
                'name' => 'Александра',
                'middle_name' => 'Вильевна',
                'last_name' => 'Зиннурова',
                'phone' => '9062283179',
                'email' => '',
                'password' => $password, // Use the same hashed password
            ],
            [
                'name' => 'Анастасия',
                'middle_name' => '',
                'last_name' => 'Кокорева',
                'phone' => '9050587690',
                'email' => '',
                'password' => $password, // Use the same hashed password
            ],
            [
                'name' => 'Данил',
                'middle_name' => '',
                'last_name' => 'Андреев',
                'phone' => '9045172507',
                'email' => '',
                'password' => $password, // Use the same hashed password
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate([
                'phone' => $user['phone']
            ], $user);
        }
    }
}
