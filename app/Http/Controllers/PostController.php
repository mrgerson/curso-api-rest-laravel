<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function showuser()
    {
        return view('users', [
            'users' => User::latest()->paginate()
        ]);
    }
}
