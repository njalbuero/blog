<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

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
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id,
        //     'slug' => 'personal-post',
        //     'title' => 'Personal Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sequi eligendi consectetur fuga at neque, iusto corrupti eum error ipsum voluptate qui perferendis fugiat facilis quia. Consequuntur excepturi magnam eius!</p>',
        // ]);
        // Post::create([
        //     'category_id' => $family->id,
        //     'user_id' => $user->id,
        //     'slug' => 'family-post',
        //     'title' => 'Family Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sequi eligendi consectetur fuga at neque, iusto corrupti eum error ipsum voluptate qui perferendis fugiat facilis quia. Consequuntur excepturi magnam eius!</p>',
        // ]);
        // Post::create([
        //     'category_id' => $work->id,
        //     'user_id' => $user->id,
        //     'slug' => 'work-post',
        //     'title' => 'Work Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sequi eligendi consectetur fuga at neque, iusto corrupti eum error ipsum voluptate qui perferendis fugiat facilis quia. Consequuntur excepturi magnam eius!</p>',
        // ]);
    }
}
