<?php

namespace Database\Seeders;
use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
        'code' => 'USD',
        'name' => 'Amerika Dollar',
        'buy_rate' => 17175.00,
        'sell_rate'=> 18240.00,
        ]);

        Currency::create([
        'code' => 'AUD',
        'name' =>  'Australia Dollar',
        'buy_rate' => 12225.00,
        'sell_rate'=> 13567.00,
        ]);

        Currency::create([
        'code' => 'EUR',
        'name' => 'Euro',
        'buy_rate' => 20100.00,
        'sell_rate'=> 21300.00,
        ]);
    }
}
