<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * Test home request code.
     *
     * @return void
     */
    public function testHomeCode()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
