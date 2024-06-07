<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newProduct = new Product();
            $newProduct->name = $faker->words(3, true);
            $newProduct->price = $faker->randomFloat(2, 5, 80);
            $newProduct->description = $faker->paragraphs(2, true);
            $newProduct->is_discounted = $faker->boolean();
            if($newProduct->is_discounted){
                $newProduct->discount = $faker->numberBetween(15, 50);
            };
            $newProduct->save();
        }
    }
}
