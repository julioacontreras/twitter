<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Post;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('get posts', function () {
    $this->getJson('/api/post')->assertStatus(200);
});

test('create post', function () {
    $attributes = Post::factory()->raw();
    $response = $this->postJson('/api/post', $attributes);
    $response->assertStatus(201);
    $this->assertDatabaseHas('posts', $attributes);
});
