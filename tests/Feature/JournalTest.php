<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JournalTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_ListOfEntryCanBeRead(){

        $this->withoutExceptionHandling();

        $response = $this->get('/');

        $response->assertStatus(200)
                 ->assertViewIs('home');
    }
}
