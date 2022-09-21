<?php

use App\Models\Post;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = User::all();

        for ($i=0; $i < 50; $i ++) { 
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->post_title = $faker->realText(40);
            $newPost->post_image = $faker->imageUrl();
            $newPost->post_content = $faker->paragraph(3, true);
            $newPost->post_date = $faker->dateTimeThisYear();
            $newPost->save();
        }
    }
}
