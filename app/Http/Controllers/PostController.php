<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function requests()
    {
        try {
            $posts = Post::where('status', 0)
                            ->with(['car' => function ($car) {
                                $car->select('*');
                            }])
                            ->with(['user' => function ($user) {
                                $user->select('*');
                            }])->get();

            return view('posts.requests')->with(['posts' => $posts]);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function accept ($id)
    {
        try {
            $post = Post::find($id);

            if ($post) {
                $post->status = 1;
                $post->save();
                return redirect()->route('posts.requests');
            } else {
                return abort(404);
            }
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function delete($id)
    {
        try {
            $post = Post::find($id);

            if ($post) {
                $post->delete();
                return redirect()->route('posts.requests');
            } else {
                return abort(404);
            }
        } catch (\Throwable $th) {
            return abort(500);
        }
    }
}
