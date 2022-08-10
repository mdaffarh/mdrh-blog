<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" =>  "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Daffa Rizmawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi qui tempore accusamus in vel laborum rerum ipsum, illo iste atque quia adipisci debitis temporibus assumenda facere quas consequatur dicta eos? Ex odit enim libero aspernatur laudantium sapiente, saepe illo iste cupiditate molestias, consequuntur incidunt quis ad voluptates minus reiciendis nam vel deserunt maiores numquam? Saepe ratione inventore molestiae esse et iusto distinctio ullam vel corporis veniam possimus voluptatem ad exercitationem debitis, aliquid in dignissimos quia quidem! A quasi id similique."
        ],
        [
            "title" =>  "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dika Satria",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda error suscipit totam eum dolore libero nemo et esse blanditiis eligendi eius veritatis voluptate odio a eos optio ducimus placeat amet, dignissimos consequuntur adipisci atque? Eaque qui quod consequatur animi eligendi commodi, modi quibusdam voluptatum dignissimos, eum odio nisi, molestiae autem."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p ) {
        // if($p["slug"] === $slug){
        //     $post = $p;
        // }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}