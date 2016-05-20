<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
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
           Comment::create([
                'id_article' =>$faker->numberBetween(1,10),
                'id_user' =>$faker->numberBetween(1,10),
                'content' => $faker->sentence,
                'date_time'=>$faker->dateTime($max = 'now'),
                'status' => '0'
            ]);
        }
    }
}
