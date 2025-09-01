<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Database\Factories\JobFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Roman Kiashko',
             'email' => 'kiashko777@gmail.com',
         ]);

         Job::factory(100)->create();
         Employer::factory(10)->create();
         //Tag::factory(10)->create();
    }
}
