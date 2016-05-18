<?php

use Illuminate\Database\Seeder;
use App\Match;
class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
           Match::create([
                'team' =>$faker->sentence,
                'stadium' =>$faker->sentence,
                'description' => implode('', $faker->sentences(4)),
                'datetime_start' => $faker->dateTimeThisYear($max = 'now'),
                'home' => $faker->numberBetween(0,1),
                'league' =>$faker->sentence,
                'status'=> 0,
            ]);
        }
    }
}
