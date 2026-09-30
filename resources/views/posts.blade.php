<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post )
        <article class="py-8 max-w-screen-md border-b border-gray-400">
            <a href="/posts/{{ $post['slug'] }}" class="text-3xl font-bold mb-2 text-gray-900 hover:underline ">{{$post['title'] }}</a>
            <div class="text-base text-gray-400">
                <a href="#">{{ $post['author'] }}</a> | <time datetime="2022-01-01">{{ $post['created_at'] }}</time>
            </div>
            <p class="py-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>

