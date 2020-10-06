@extends('layouts.general')
<x-header title="Your post is successfully saved!"
          p="You may to show, share, edit and even delete this post as its owner!"/>
@section('content')



<p>
    {{ $post->title }}
</p>

@endsection
