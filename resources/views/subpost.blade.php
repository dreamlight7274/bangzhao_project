<!doctype html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
{{-- <script src="test.js"></script> --}}
<body>
<h1>Hello world</h1>

<article>
<h1>
    {{-- <?= $post_in_html->title; ?> --}}
    {{ $post_in_html->title }}
</h1>
<div>
    {{-- <?= $post_in_html->body; ?> --}}
     {{-- {{ $post_in_html->body }}  --}}
     {!! $post_in_html->body !!}
</div>
</article>
<a href="/post">Go Back</a>
</body>