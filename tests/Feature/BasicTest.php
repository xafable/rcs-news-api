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
    public function test()
    {
        $this->seed([
            CategorySeeder::class,
            ArticleSeeder::class,
        ]);

        $this->assertTrue(true);

    }
}
