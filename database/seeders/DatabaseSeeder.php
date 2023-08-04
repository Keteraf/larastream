<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Raffaele Longo Elia',
            'email' => 'test@larastream.it',
        ]);

        User::factory(10)->create();

        Course::factory(3)->create();

        Video::factory()->create([
            'name' => 'Video Test',
            'description' => 'Video for testing purpose',
            'course_id' => \App\Models\Course::all()->random()->id,
        ]);

        Video::factory(10)->create();

        foreach (User::all() as $user) {

            $user->courses()->attach(Course::all()->random(2));
        }
    }
}
