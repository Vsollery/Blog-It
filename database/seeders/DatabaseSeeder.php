<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Venia Sollery',
        //     'email' => 'vsollery@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Satriya',
        //     'email' => 'Satriya@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.',
        //     'body' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.
        //     Dolor deserunt eu irure cupidatat amet eu. Dolor officia cupidatat nisi 
        //     reprehenderit dolor qui. Officia ipsum nostrud irure aute velit nulla aute esse.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.',
        //     'body' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.
        //     Dolor deserunt eu irure cupidatat amet eu. Dolor officia cupidatat nisi 
        //     reprehenderit dolor qui. Officia ipsum nostrud irure aute velit nulla aute esse.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.',
        //     'body' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.
        //     Dolor deserunt eu irure cupidatat amet eu. Dolor officia cupidatat nisi 
        //     reprehenderit dolor qui. Officia ipsum nostrud irure aute velit nulla aute esse.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke-empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.',
        //     'body' => 'Labore duis deserunt velit quis tempor occaecat nostrud velit sint non incididunt.
        //     Dolor deserunt eu irure cupidatat amet eu. Dolor officia cupidatat nisi 
        //     reprehenderit dolor qui. Officia ipsum nostrud irure aute velit nulla aute esse.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
