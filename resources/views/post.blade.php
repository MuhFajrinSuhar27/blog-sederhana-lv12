<x-layout :title="$title">



  
        <article class="py-8 max-w-screen-md border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="/authors/{{ $post->author->id }}" class="hover:underline"> {{ $post->author->name }}</a> | {{ $post->created_at->format('F j, Y') }}
                
            </div>
            <p class="my-4 font-light">{{$post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to post </a>
        </article>


</x-layout>
