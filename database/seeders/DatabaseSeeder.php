<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::truncate();
        // Post::truncate();
        // Category::truncate();


        Post::factory(5)->create(); //since we have factories.

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p> Lorem ipsum dolar sit amet <p>',
        //     'body' => '<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente nesciunt laudantium dignissimos obcaecati deleniti dolorum officia laboriosam excepturi saepe optio voluptatem unde veritatis expedita, debitis tempore quia. Eaque, necessitatibus rerum </p>'

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p> Lorem ipsum dolar sit amet <p>',
        //     'body' => '<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente nesciunt laudantium dignissimos obcaecati deleniti dolorum officia laboriosam excepturi saepe optio voluptatem unde veritatis expedita, debitis tempore quia. Eaque, necessitatibus rerum </p>'

        // ]);



    }
}