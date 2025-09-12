<x-layout :title="$pageTitle">
<h2>Blog</h2>


@foreach($comments as $comment)

<h2 class="text-2xl">{{ $comment->author }}</h2>
<p>{{ $comment->content }}</p>

<a href="blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>


@endforeach
</x-layout>
