<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        // if you use php atisan db:seed, it will clean the db firstly. 

        // \App\Models\User::factory(10)->create();
        // it's a convenient approach to create some data automatically.

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $user = User::factory()->create();

        $user = User::factory()->create([
            'name' => 'Faker'
        ]);


        Post::factory(5)->create([
            'user_id'=> $user->id
        ]);

        // $family = Category::create([
        //     'name' => 'family',
        //     'slug' => 'family'
        // ]);
        // $personal = Category::create([
        //     'name' => 'personal',
        //     'slug' => 'personal'
        // ]);
        // $work = Category::create([
        //     'name' => 'work',
        //     'slug' => 'work'

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $family->id,
        //     'title' => 'my first post',
        //     'excerpt' => 'It was then that the fox appeared.',
        //     'body' => '<p>It was then that the fox appeared. It was then that the fox appeared. It was then that the fox appeared.</p>'


        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $personal->id,
        //     'title' => 'my second post',
        //     'excerpt' => '“I am right here,” the voice said, “under the apple tree.”',
        //     'body' => '<p>“I am right here,” the voice said, “under the apple tree.” “I am right here,” the voice said, “under the apple tree.” “I am right here,” the voice said, “under the apple tree.” </p>'


        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $work->id,
        //     'title' => 'my third post',
        //     'excerpt' => '“I cannot play with you,” the fox said. “I am not tamed.”',
        //     'body' => '<p>“I cannot play with you,” the fox said. “I am not tamed.” “I cannot play with you,” the fox said. “I am not tamed.” “I cannot play with you,” the fox said. “I am not tamed.”</p>'


        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $family->id,
        //     'title' => 'my forth post',
        //     'excerpt' => 'Travel to be happy, must be traveling light',
        //     'body' => '<p>Travel to be happy, must be traveling light. Travel to be happy, must be traveling light</p>'


        // ]);


    }
}
