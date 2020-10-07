@extends('layouts.general')
<x-header title="Your post is successfully saved!"
          p="You may to show, share, edit and even delete this post as its owner!"/>
@section('content')



<p>
    <a href="{{ route('single_show', ['id' => $post->id]) }}">
        <h4>{{ $post->title }}</h4>
    </a>
</p>

@endsection
