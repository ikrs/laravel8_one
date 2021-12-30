@extends('layouts.app')

@section('title', $post['title'])

@section('content')
    @if($post['is_new'])
        <div>
            A new blog post
        </div>
    @else
        <div>
            A old blog post using else
        </div>
    @endif

    @unless($post['is_new'])
        <div>
            It is an old post .... unsing unless
        </div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

    @isset($post['has_comments'])
        <div>Post has some comments .... usinf isset</div>
    @endisset

@endsection
