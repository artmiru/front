<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            [
                'payment_method' => 'Наличные'
            ],
            [
                'payment_method' => 'Терминал'
            ],
            [
                'payment_method' => 'Перевод'
            ],
            [
                'payment_method' => 'QR-код'
            ],
            [
                'payment_method' => 'Онлайн'
            ],
            [
                'payment_method' => 'Безналичные'
            ]
        ];

        foreach ($paymentMethods as $method) {
            PaymentMethod::firstOrCreate($method);
        }
    }
}
