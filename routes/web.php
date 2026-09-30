<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',
        [
            'title' => 'Home',
        ]);
});

Route::get('/about', function () {
    return view('about',
        [
            'title' => 'About',
        ]
    );
});

Route::get('/posts', function () {
    return view('posts',
        [
            'title' => 'Blog',
            'posts' => [
                [
                    'id'=>'1',
                    'title' => 'First Post',
                    'slug' => 'first-post',
                    'author' => 'John Doe',
                    'created_at' => '2023-01-01',
                    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium itaque atque dolor voluptatum rem asperiores, nam facere molestias voluptatibus tempora non in ratione aliquid sapiente cupiditate eum minus. Non, exercitationem.'
                ],
                [
                    'id'=>'2',
                    'title' => 'Second Post',
                    'slug' => 'second-post',
                    'author' => 'Jane Doe',
                    'created_at' => '2023-01-02',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ab vitae necessitatibus cumque, modi, blanditiis mollitia sint, inventore quod accusamus vero autem porro? Laboriosam rem quo ex culpa unde dolorem!'
                ],
                [
                    'id'=>'1',
                    'title' => 'Third Post',
                    'slug' => 'third-post',
                    'author' => 'John Doe',
                    'created_at' => '2023-01-03',
                    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse nesciunt libero doloribus, earum possimus minus vel maxime fugiat aliquid enim voluptatem repellat, voluptatum praesentium hic delectus ad? Mollitia, porro vitae!'
                ]
            ]
        ]
    );
});

Route::get('/posts/{slug}', function ($slug) {

    $posts = [
                [
                    'id'=>'1',
                    'title' => 'First Post',
                    'slug' => 'first-post',
                    'author' => 'John Doe',
                    'created_at' => '2023-01-01',
                    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium itaque atque dolor voluptatum rem asperiores, nam facere molestias voluptatibus tempora non in ratione aliquid sapiente cupiditate eum minus. Non, exercitationem.'
                ],
                [
                    'id'=>'2',
                    'title' => 'Second Post',
                    'slug' => 'second-post',
                    'author' => 'Jane Doe',
                    'created_at' => '2023-01-02',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ab vitae necessitatibus cumque, modi, blanditiis mollitia sint, inventore quod accusamus vero autem porro? Laboriosam rem quo ex culpa unde dolorem!'
                ],
                [
                    'id'=>'1',
                    'title' => 'Third Post',
                    'slug' => 'third-post',
                    'author' => 'John Doe',
                    'created_at' => '2023-01-03',
                    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse nesciunt libero doloribus, earum possimus minus vel maxime fugiat aliquid enim voluptatem repellat, voluptatum praesentium hic delectus ad? Mollitia, porro vitae!'
                ]
            ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] === $slug;
    });

    // dd($post);

    return view('post',
        [
            'title' => 'Single Post',
            'post' => $post
        ]
    );
    
});

Route::get('/contact', function () {
    return view('contact',
        [
            'title' => 'Contact'
        ]
    );
});
