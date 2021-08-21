<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home', [
    "title" => "Home"
  ]);
});

Route::get('/about', function () {
  return view('about', [
    "title" => "About"
  ]);
});

Route::get('/blog', function () {
  $blog_post =
    [
      [
        "title" => "Blog",
        "slug" => "judul-pertama",
        "author" => "Maha Dwi Putra",
        "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus molestias ipsam optio? Sequi vitae tempora asperiores. Facere omnis laudantium maxime nihil deserunt quaerat necessitatibus aspernatur praesentium similique ea. Accusantium maiores placeat sequi, alias illo voluptatibus laboriosam eaque ipsum dolores modi aliquid at, error totam. Sed doloremque vero eaque, dolores eos beatae delectus quidem et exercitationem quod, hic excepturi, rem provident magnam modi blanditiis quo. Cum aliquid, deserunt quos consectetur officiis ut laudantium repellat voluptates eius ratione magni perferendis distinctio odit?"
      ],
      [
        "title" => "Oke",
        "slug" => "judul-kedua",
        "author" => "Ibrahim",
        "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus molestias ipsam optio? Sequi vitae tempora asperiores. Facere omnis laudantium maxime nihil deserunt quaerat necessitatibus aspernatur praesentium similique ea. Accusantium maiores placeat sequi, alias illo voluptatibus laboriosam eaque ipsum dolores modi aliquid at, error totam. Sed doloremque vero eaque, dolores eos beatae delectus quidem et exercitationem quod, "
      ]
    ];
  return view('blog', [
    "title" => "Blog",
    "posts" => $blog_post
  ]);
});

// halaman single post
Route::get('/blog/{slug}', function ($slug) {
  $blog_post =
    [
      [
        "title" => "Blog",
        "slug" => "judul-pertama",
        "author" => "Maha Dwi Putra",
        "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus molestias ipsam optio? Sequi vitae tempora asperiores. Facere omnis laudantium maxime nihil deserunt quaerat necessitatibus aspernatur praesentium similique ea. Accusantium maiores placeat sequi, alias illo voluptatibus laboriosam eaque ipsum dolores modi aliquid at, error totam. Sed doloremque vero eaque, dolores eos beatae delectus quidem et exercitationem quod, hic excepturi, rem provident magnam modi blanditiis quo. Cum aliquid, deserunt quos consectetur officiis ut laudantium repellat voluptates eius ratione magni perferendis distinctio odit?"
      ],
      [
        "title" => "Oke",
        "slug" => "judul-kedua",
        "author" => "Ibrahim",
        "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus molestias ipsam optio? Sequi vitae tempora asperiores. Facere omnis laudantium maxime nihil deserunt quaerat necessitatibus aspernatur praesentium similique ea. Accusantium maiores placeat sequi, alias illo voluptatibus laboriosam eaque ipsum dolores modi aliquid at, error totam. Sed doloremque vero eaque, dolores eos beatae delectus quidem et exercitationem quod, "
      ]
    ];
  return view('post', [
    "title" => "Single Post",
    "post" => $blog_post
  ]);
});
