<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        return inertia()->render('Home',
            ['posts' => Post::orderBy('id', 'DESC')->get()]);
    }

    public function store(Request $request)
    {
//        sleep(2);
        $validate = $request->validate([
            'body' => ['required']
        ]);

      $post = Post::create([
           'body' => $request->body,
       ]);
        return back();
    }

}
