<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeachersTableSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = [
            [
                'user_id' => 1,
                'bio' => 'СПБГАИЖСА им. Репина (Академия художеств), факультет живописи. Опыт преподавания более 15 лет.',
                'folder' => 'evsei',
                'status' => 1,
                'pass_card' => '',
            ],
            [
                'user_id' => 2,
                'bio' => 'СПБГАИЖСА им. Репина (Академия художеств), факультет живописи.Член Союза художников России.',
                'folder' => 'konstantinov',
                'status' => 1,
                'pass_card' => '',
            ],
            [
                'user_id' => 3,
                'bio' => 'CПБГАИЖСА им.Репина (Академия художеств), факультет живописи.',
                'folder' => 'muravina',
                'status' => 1,
                'pass_card' => '',
            ],
            [
                'user_id' => 4,
                'bio' => 'СПБГАИЖСА им. Репина (Академия художеств), факультет живописи.',
                'folder' => 'dobrovolskiy',
                'status' => 1,
                'pass_card' => '',
            ],
            [
                'user_id' => 5,
                'bio' => 'В 2009 году окончил Минское государственное училище имени А. К. Глебова, специальность «Художник-живописец, преподаватель». В 2010 году поступил в Академию художеств им. Репина на отделение станковой живописи. В 2016 году окончил обучение в мастерской станковой живописи под руководством профессора Ю. В. Калюты. Специальность «Художник-живописец».',
                'folder' => 'zlobin',
                'status' => 1,
                'pass_card' => '',
            ],
            [
                'user_id' => 6,
                'bio' => 'СПБГАИЖСА им. Репина (Академия художеств), факультет живописи. Красный диплом. В студии «АртМир» Александра преподает рисунок и живопись уже больше 6 лет.',
                'folder' => 'zinnurova',
                'status' => 1,
                'pass_card' => '',
            ],
            [
                'user_id' => 7,
                'bio' => 'СПБГАИЖСА им. Репина (Академия художеств), факультет живописи.',
                'folder' => 'kokoreva',
                'status' => 1,
                'pass_card' => 17663,
            ],
            [
                'user_id' => 8,
                'bio' => 'Окончил Санкт-Петербургский государственный академический художественный лицей им. Б. В. Иогансона, Санкт-Петербургский институт живописи, скульптуры и архитектуры имени Репина, Школу интерпретации современного искусства «Пайдейя».',
                'folder' => 'andreev',
                'status' => 1,
                'pass_card' => '',
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::firstOrCreate([
                'user_id' => $teacher['user_id']
            ], $teacher);
        }
    }
}
