<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $new_post = new Post();
        $new_post->title = $faker->sentence($nbWords = 5, $variableNbWords = true);
        $new_post->user_id = rand(1,5);
        $new_post->content = $faker-> text($maxNbChars = 2000);
        $new_post->image_path = $faker->imageUrl($width = 400, $height = 400);
        $new_post->save();
      }
    }
}
