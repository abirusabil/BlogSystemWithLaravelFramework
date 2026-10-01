<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    // Eager loading to reduce the number of queries
    // $post = $posts->with(['category', 'author'])->get();

    return view('posts',
        [
            'title' => 'Blog',
            'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString(),
        ]
    );
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post',
        [
            'title' => 'Single Post',
            'post' => $post,
        ]
    );

});

Route::get('/contact', function () {
    return view('contact',
        [
            'title' => 'Contact',
        ]
    );
});

Route::get('/authors/{user:username}', function (User $user) {
    // Lazy Eager loading to reduce the number of queries
    // $posts = $user->posts->load('category', 'author');
    return view('posts',
        [
            'title' => 'Articles By '.$user->name,
            'posts' => $user->posts,
        ]
    );

});

Route::get('/categories/{category:slug}', function (Category $category) {
    // Lazy Eager loading to reduce the number of queries
    // $posts = $category->posts->load('category', 'author');

    return view('posts',
        [
            'title' => 'Articles In Category '.$category->name,
            'posts' => $category->posts,
        ]
    );
});
