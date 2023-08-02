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

        \App\Models\User::factory()->create([
            'name' => 'Raffaele Longo Elia',
            'email' => 'test@larastream.it',
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Video::factory()->create([
            'name' => 'Video Test',
            'description' => 'Video for testing purpose'
        ]);
        \App\Models\Video::factory(10)->create();
    }
}
