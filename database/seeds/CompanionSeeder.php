<?php

use Illuminate\Database\Seeder;

class CompanionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(1234);
        for($i = 0; $i < 50; $i++){
            \DB::table('Companions') -> insert([
                'person_id' => $faker->numberBetween($min = 1, $max = 150),
                'name' => $faker->firstName,
                'color' => $faker->colorName,
                'birthdate' => $faker->date()
            ]);
        }
        factory(\App\Companion::class,400)->create();
    }
}
