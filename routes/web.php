<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' =>'Homepage']);
});


Route::get('/posts', function () {

    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'release' => '1 January',
            'author' => 'Muh. Fajrin Suhar',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni fugiat error praesentium maxime vitae aspernatur cumque laudantium ut voluptatum non consectetur aliquam labore provident quasi nostrum perspiciatis commodi, mollitia iste?'
        ], 
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'release' => '2 January', 
            'author' => 'Muh. Fajrin Suhar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis voluptate, atque ex nobis voluptatum, odit totam doloremque consectetur libero sapiente ipsum, quod numquam recusandae qui voluptatibus deleniti molestias perspiciatis'
        ]
        ];

    return view('posts', ['title' => 'Posts' , 'posts' => $posts]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'release' => '1 January',
            'author' => 'Muh. Fajrin Suhar',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni fugiat error praesentium maxime vitae aspernatur cumque laudantium ut voluptatum non consectetur aliquam labore provident quasi nostrum perspiciatis commodi, mollitia iste?'
        ], 
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'release' => '2 January', 
            'author' => 'Muh. Fajrin Suhar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis voluptate, atque ex nobis voluptatum, odit totam doloremque consectetur libero sapiente ipsum, quod numquam recusandae qui voluptatibus deleniti molestias perspiciatis'
        ]
        ];

        
        $post = Arr::first($posts, function($post) use ($slug){
            return $post['slug'] == $slug;         
        });
        if(!$post ) abort(404);

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});




Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


