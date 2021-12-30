@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
{{--    @each('posts.partials.post', $post, 'post')--}}
    @forelse($posts as $key => $post)
         include subview
        @include('posts.partials.post')

    @empty
        No posts found!
    @endforelse
@endsection
