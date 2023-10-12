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
        \App\Models\Year::factory(3)->create();
        \App\Models\Group::factory(3)->create();

        \App\Models\User::factory(10)->create()->each(function ($user) {
            $user->years()->attach(\App\Models\Year::inRandomOrder()->first());
        });

        \App\Models\Song::factory(10)->create();

        \App\Models\File::factory(20)->create()->each(function ($file) {
            //$file->groups()->attach(\App\Models\Group::inRandomOrder()->first());
            $file->groups()->attach(\App\Models\Group::first());
        });
    }
}
