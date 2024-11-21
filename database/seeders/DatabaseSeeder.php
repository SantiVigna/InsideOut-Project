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
            'emotion' => "https://res.cloudinary.com/dg28513f0/image/upload/v1732176015/j5xvr134hwrpau4t2ewn.png"
        ]);
        Journal::factory()->create([
            'entry' => "I feel really bored these days...",
            'emotion' => "https://res.cloudinary.com/dg28513f0/image/upload/v1732176002/mnvrafczk6iyi2cvjpaj.png"
        ]);
        Journal::factory()->create([
            'entry' => "I don't know why but I'm very angry >:(",
            'emotion' => "https://res.cloudinary.com/dg28513f0/image/upload/v1732176002/cgnesrxbhgusyo0dk1cz.png"
        ]);
    }
}
