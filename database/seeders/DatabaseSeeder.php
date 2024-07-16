<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '1234',
        ]);

        $post = new Post();
        $post->title = 'My image';
        $post->description = 'Is simply dummy text of the printing and typesetting industry.';
        $post->likeCount = 0;
        $post->save();
        $post->image()->create([
            'url' => '/plant.webp'
        ]);
        $post->save();

        $post = new Post();
        $post->title = 'My video';
        $post->description = 'Is simply dummy text of the printing and typesetting industry.';
        $post->likeCount = 0;
        $post->save();
        $post->video()->create([
            'url' => '/bunny.mp4',
            'type' => 'mp4'
        ]);
        $post->save();

        $post = new Post();
        $post->title = 'My text';
        $post->description = 'Is simply dummy text of the printing and typesetting industry.';
        $post->likeCount = 0;
        $post->save();

        $comment = new Comment();
        $comment->post_id = Post::first()->id;
        $comment->user_id = User::first()->id;
        $comment->text = 'Is simply dummy text of the printing and typesetting industry.';
        $comment->save();

    }
}
