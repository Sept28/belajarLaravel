<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Guesser\Name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        
        $faker = Factory::create('id_ID');

        $type = ['Makanan', 'Minuman', 'Camilan', 'Kudapan', 'Rokok'];

        for ($i=0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->text($max = 30),
                'price' => $faker->numberBetween($min = 100000, $max = NULL),
                'production_date' => $faker->dateTimeBetween($startDate = '-20 years', $endDate = 'now', $timezone = null),
                'expired' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years', $timezone = null),
                'type' => $faker->randomElement($type),
                'description' => $faker->text,
                'stock' => $faker->numberBetween(20, 999),
                'produser' => $faker->company,
                'address' => $faker->address,
                'postcode' => $faker->postcode,
                'status' => $faker->boolean,
            ]);
        }
    }
}
