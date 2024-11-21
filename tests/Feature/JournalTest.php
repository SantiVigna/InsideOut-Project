<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Journal;

class JournalTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response -> assertStatus(200);
    }

    public function test_ListOfProductsCanBeRetrieved()
    {
        $this->withoutExceptionHandling();

        Journal::all();

        $response = $this->get('/');

        $response->assertStatus(200)
                ->assertViewIs('home');
    }
}
