@extends('layout.main')

@section('container')
@foreach ($posts as $item)
<article>
    <h2>
      <a href="/blog/{{ $item["slug"] }}">{{ $item["title"] }}</a>
    </h2>
    <h6>By : {{ $item["author"] }}</h6>
    <p>{{ $item["isi"] }}</p>
</article>
@endforeach
@endsection
