<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->truncate();

        $faker = Factory::create('id_ID');

        $gender     = ['L','P'];
        $religion   = ['Islam','Kristen','Katolik','Budha','Hindu','Atheis'];
        $format     = 'Y-m-d';
        $max        = 'now';
        $maxNbChars = 200;
        $indexSize  = 2;

        for ($i=0; $i < 120; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(22, 45),
                'address' => $faker->address,
                'gender' => $faker->randomElement($gender),
                'religion' => $faker->randomElement($religion),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'birthdate' => $faker->date($format, $max),
                'description' => $faker->realText($maxNbChars, $indexSize),
            ]);
        }
    }
}
