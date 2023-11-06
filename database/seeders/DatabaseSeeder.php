<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::truncate();
        \App\Models\Category::truncate();
        // \App\Models\User::factory(10)->create();
        // it's a convenient approach to create some data automatically.

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Category::create([
            'name' => 'family',
            'slug' => 'family'
        ]);
        \App\Models\Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);
        \App\Models\Category::create([
            'name' => 'work',
            'slug' => 'work'

        ]);


    }
}
