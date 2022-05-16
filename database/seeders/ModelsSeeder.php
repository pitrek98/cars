<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        for ($i = 0; $i < 60; $i++) {
            $data[] = ['name' => $faker->vehicleBrand];
        }
        DB::table("models")->insert($data);
    }
}
