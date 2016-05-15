<?php

use Illuminate\Database\Seeder;
use App\Users;

class UsersTableSeeder extends Seeder
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
           Users::create([
                'username' =>$faker->userName,
                'password' =>bcrypt($faker->password),
                'email' => $faker->email,
                'first_name' => $faker->firstName($gender = null|'male'|'female'),
                'last_name' => $faker->lastName,
                'date_join' => $faker->dateTime($max = 'now'),
                'author'=> 0,
                'status'=> 0,
            ]);
        }
    }
}
