<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\ContestParticipant;

class ContestParticipantTest extends TestCase
{
    use RefreshDatabase;


    

    public function testStoreValid()
    {
        $params = [
            'name' => 'Joan',
            'rank' => 1650,
            'elo' => 'Pupil'
        ];

        $this->post('store', $params)
            ->assertStatus(302);
            //->assertSessionHas('status');

       //$this->assertEquals(session('status'), 'Blog post was created!');
    }

    

    public function testUpdate()
    {
        $participant = $this->createDummyParticipant();

        $this->assertDatabaseHas('contest-participant', $participant->toArray());

        $params = $participant;
        $params->name = 'Joan';
        $params->rank = '1650';
        $params->elo = 'Pupíl';
            

        $this->put("/update", $params->toArray());
            //->assertStatus(302)
            //->assertSessionHas('status');

        //$this->assertEquals(session('status'), 'Blog post was updated!');
        //$this->assertDatabaseMissing('contest-participant', $participant->toArray());
        $this->assertDatabaseHas('contest-participant', [
            'name' => 'Joan'
        ]);
    }

    public function testDelete() 
    {
        $participant = $this->createDummyParticipant();
        $this->assertDatabaseHas('contest-participant', $participant->toArray());

        $this->delete("/delete",$participant->toArray());
            //->assertStatus(302)
            //->assertSessionHas('status');

        //$this->assertEquals(session('status'), 'Blog post was deleted!');
        $this->assertDatabaseMissing('contest-participant', $participant->toArray());
    }

    private function createDummyParticipant(): ContestParticipant
    {
        $participant = new ContestParticipant();
        $participant->name = 'Gennady';
        $participant->rank = 4600;
        $participant->elo = 'Grandmaster';
        $participant->save();

       //return factory(BlogPost::class)->states('new-title')->create();

         return $participant;
    }
}