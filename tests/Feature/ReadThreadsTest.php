<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ThreadsTest extends TestCase
{

    use RefreshDatabase;

    /** test */
    public function testUserCanViewAllThreads()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');

        $response->assertSee($thread->title);
    }

    /** test */
    public function testUserCanViewASingleThread()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads/' . $thread->id);

        $response->assertSee($thread->title);
    }
}
