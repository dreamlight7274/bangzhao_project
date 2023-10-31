{{-- <!doctype html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css"> --}}
{{-- <script src="test.js"></script> --}}
@extends('layout')

    

{{-- <body> --}}
@section('main_content')    
<h1>Hello world</h1>

<article>
<h1>
    {{-- <?= $post_in_html->title; ?> --}}
    {{ $post_in_html->title }}
</h1>
<p>
    <a href="/categories/{{ $post_in_html->category->id }}">{{ $post_in_html->category->name }}</a>
</p>
<div>
    {{-- <?= $post_in_html->body; ?> --}}
     {{-- {{ $post_in_html->body }}  --}}
     {!! $post_in_html->body !!}
</div>
</article>
<a href="/post">Go Back</a>
@endsection
{{-- </body> --}}