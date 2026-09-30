<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <article class="py-8 max-w-screen-md border-gray-400">
            <h2 class="text-3xl font-bold mb-2 text-gray-900 ">{{$post['title'] }}</h2>
            <div class="text-base text-gray-400">
                <a href="#">{{ $post['author'] }}</a> | <time datetime="2022-01-01">{{ $post['created_at'] }}</time>
            </div>
            <p class="py-4 font-light">{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back To Blog</a>
        </article>
</x-layout>

