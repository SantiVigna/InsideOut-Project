<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Journal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Journal::factory()->create([
            'entry' => "Today is my Birthday!",
            'emotion' => "img/emotions/happiness.jpg"
        ]);
        Journal::factory()->create([
            'entry' => "I feel really bored these days...",
            'emotion' => "img/emotions/boredom.jpg"
        ]);
    }
}
