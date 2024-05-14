<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
            [
                'title' => 'Title 1',
                'content' => 'Content 1',
                'author' => 'Author 1',
                'body' => 'Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Asperiores consequuntur dolor dolore excepturi ipsum necessitatibus optio quas,
                    recusandae repellendus. Eveniet?'
            ],
            [
                'title' => 'Title 2',
                'content' => 'Content 2',
                'author' => 'Author 2',
                'body' => 'Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Asperiores consequuntur dolor dolore excepturi ipsum necessitatibus optio quas,
                    recusandae repellendus. Eveniet?'
            ]
        ]
        ]
    );
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
