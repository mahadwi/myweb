<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Blog Maha Dwi",
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

    public static function all()
    {
        return self::$blog_post;
    }

    public static function find($slug)
    {
        $posts = self::$blog_post;

        $new_post = [];
        foreach ($posts as $key => $value) {
            if ($value['slug'] === $slug) {
                $new_post = $value;
            }
        }

        return $new_post;
    }
}
