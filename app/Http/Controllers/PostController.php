<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function createPost(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->likeCount = 0;
        $post->save();

        $image_url = $request->input('image_url');
        if ($image_url) {
            $post->image()->create([
                'url' => $image_url
            ]);
            $post->save();
        }

        $video_url = $request->input('video_url');
        $video_type = $request->input('video_type');
        if ($video_url && $video_type) {
            $post->video()->create([
                'url' => $video_url,
                'type' => $video_type
            ]);
            $post->save();
        }

        return $post;
    }

    public function getPosts() {
        $view = [];
        $posts = Post::all();
        foreach ($posts as &$post) {
            $item = $post;
            $post->image;
            $post->video;
            array_push($view, $item);
        }
        return $view;
    }

    public function getPost(string $id) {
        $post = Post::findOrFail($id);
        $post->image;
        $post->video;
        return $post;
    }

    public function like(string $id) {
        $post = Post::findOrFail($id);
        $post->likeCount++;
        $post->save();
        return $post;
    }

}
