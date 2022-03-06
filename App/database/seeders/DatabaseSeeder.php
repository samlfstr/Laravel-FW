<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();

        User::factory(5)->create();
        Author::factory(5)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::factory(5)->create();

    }
}
