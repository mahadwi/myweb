@extends('layout.main')
@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h6>{{ $post["author"] }}</h6>
    <p>{{ $post["isi"] }}</p>
</article>
<a href="/blog">Back To Post</a>
@endsection
