<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
        return redirect('/posts');
    }


    public function create_page(): View
    {
        return view('create', ['title' => 'Tambah Blog']);
    }

    public function show(): View
    {
        return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
    }


    public function read_more($id):View{
        return view('post', ['title' => 'Blog Single Post', 'post' => Post::find($id)]);
    }

    public function update(){

    }

    public function delete(){


    }
}
