<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coursePrices = [
            ['name' => 'Пробное бесплатно', 'price' => 0, 'qnt' => 1],
            ['name' => 'Пробное 300', 'price' => 300, 'qnt' => 1],
            ['name' => 'Пробное 500', 'price' => 500, 'qnt' => 1],
            ['name' => '1 час', 'price' => 550, 'qnt' => 1],
            ['name' => 'Разовое', 'price' => 1100, 'qnt' => 1],
            ['name' => '4 урока', 'price' => 3900, 'qnt' => 4],
            ['name' => '8 уроков', 'price' => 6900, 'qnt' => 8],
            ['name' => '12 уроков', 'price' => 8900, 'qnt' => 12],
            ['name' => '20 уроков', 'price' => 11000, 'qnt' => 20],
            ['name' => 'Безлимитный', 'price' => 16000, 'qnt' => 30],
            ['name' => 'Мастер-класс', 'price' => 2900, 'qnt' => 1],
        ];

        foreach ($coursePrices as $coursePrice) {
            DB::table('subscriptions')->insert($coursePrice);
        }
    }
}
