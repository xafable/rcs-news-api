<?php

namespace Tests\Feature;

use Database\Seeders\ArticleSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database()
    {
        $this->seed([
            CategorySeeder::class,
            ArticleSeeder::class,
        ]);

        $this->assertTrue(true);

    }


    /**
     *
     * @return void
     */
    public function test_fetch_categories(){
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/api/categories');

        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_fetch_articles(){
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/api/articles/1');

        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_fetch_article(){
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/api/article/1');

        $response->assertStatus(200);
    }



}
