<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
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
            \DB::table('People') -> insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'birthdate' => $faker->date($format = 'Y-m-d', $max = now()),
                'address_id' => rand(1, 150)
            ]);
        }
        factory(\App\Person::class,100)->create();
    }
}
