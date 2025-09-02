<?php 

namespace App\Models;
use Illuminate\Support\Arr;

class post {

    public static function all() 
    {
      return  [
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
    }
  
    public static function find($slug)
    {
       return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ??  abort(404);;
    }



  }


