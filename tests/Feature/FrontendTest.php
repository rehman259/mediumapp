<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FrontendTest extends TestCase
{
    /**
     * Homepage test.
     *
     * @return void
     */
    public function testHomeTest()
    {
        $response = $this->get('/');

        $response->assertStatus(404);
    } 

    /**
     * Post page test.
     *
     * @return void
     */
    public function testPostTest()
    {
        $response = $this->get('/post/{slug}');

        $response->assertStatus(404);
    }

    /**
     * Category page test.
     *
     * @return void
     */
    public function testCategoryTest()
    {
        $response = $this->get('/category/{id}');

        $response->assertStatus(404);
    }

    /**
     * Tag page test.
     *
     * @return void
     */
    public function testTagTest()
    {
        $response = $this->get('/tag/{id}');

        $response->assertStatus(404);
    }

    
    /**
     * Homepage test.
     *
     * @return void
     */
    public function testTextHomepage()
    {
        $response = $this->get('/');
        $response->assertSee('Medium');
    }
}
