<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $newClient = new Client();
            $newClient->name = $faker->firstName();
            $newClient->surname = $faker->lastName();
            $newClient->mail = $faker->email();
            $newClient->password = $faker->password();
            $newClient->prime = $faker->boolean();
            $newClient->save();
        }
    }
}
