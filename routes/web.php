<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' =>'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts', function () {

    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'release' => '1 January',
            'author' => 'Muh. Fajrin Suhar',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni fugiat error praesentium maxime vitae aspernatur cumque laudantium ut voluptatum non consectetur aliquam labore provident quasi nostrum perspiciatis commodi, mollitia iste?'
        ], 

        [
            'title' => 'Judul Artikel 2',
            'release' => '2 January', 
            'author' => 'Muh. Fajrin Suhar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis voluptate, atque ex nobis voluptatum, odit totam doloremque consectetur libero sapiente ipsum, quod numquam recusandae qui voluptatibus deleniti molestias perspiciatis'
        ]
        ];

    return view('posts', ['title' => 'Posts' , 'posts' => $posts]);
});


