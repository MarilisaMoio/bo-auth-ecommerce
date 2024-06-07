<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 8; $i++){
            $newOrder = new Order();
            $newOrder->client_id = $faker->numberBetween(1, 6);
            $newOrder->status = $faker->randomElement(['Consegnato', 'In preparazione', 'In transito']);
            $newOrder->save();
        }
    }
}
