@extends('layout.main')
@section('container')
<article>
  @foreach ($post as $item)
  <h2>{{ $item['title'] }}</h2>
  <h6>{{ $item['author'] }}</h6>
  <p>{{ $item['isi'] }}</p>
  @endforeach
</article>
<a href="/blog">Back To Post</a>
@endsection
