<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function testBasicTest()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
