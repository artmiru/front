<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coursePrices = [
            ['name' => 'Записан'],
            ['name' => 'Пришел'],
            ['name' => 'Не пришел'],
            ['name' => 'Отмена']
        ];

        foreach ($coursePrices as $coursePrice) {
            DB::table('visit_statuses')->insert($coursePrice);
        }
    }
}
