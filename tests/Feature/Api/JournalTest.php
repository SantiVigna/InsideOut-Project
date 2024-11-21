<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Journal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;


class JournalTest extends TestCase
{
    /**
    * A basic feature test example.
    */
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfJournalInJsonFile(){
        $journal = Journal::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInJournalWithApi(){
        $journal = Journal::factory(1)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('journals', 1);

        $response = $this->get(route('apihome'));
        $response->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInJournalWithJsonFile(){
        $response = $this->post(route('apistore'), [
            'entry' => 'chocolate cake',
            'emotion' => 'happiness'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);

    }

    public function test_CheckIfCanUpdateEntryInJournalWithJsonFile(){
        $response = $this->post(route('apistore'), [
            'entry' => 'chocolate cake',
            'emotion' => 'happiness'
        ]);

        $data = ['entry' => 'chocolate cake'];
        $response = $this ->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/journals/5', [
            'entry' => 'carrot cake',
            'emotion' => 'disgust'
        ]);

        $data = ['entry' => 'carrot cake'];
        $response = $this ->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

    }
}
