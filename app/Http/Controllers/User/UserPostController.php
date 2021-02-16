<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();

        return view('user.posts', [
            'posts' => $posts
        ]);
    }
}
