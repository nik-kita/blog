@extends('layouts.general')



@section('content')
<div style="display: inline-block">

    <h4>{{ $post->title }}</h4>
    <p>{{ $post->body }}</p>
    <hr>
    <form method="post" action="{{ route('saveComment') }}">
        @csrf
        <textarea name="comment" placeholder="Comment should be funny or angry only!"></textarea>
        <input name="postId" type="hidden" value="{{ $post->id }}">
        <button type="submit">Comment</button>
        <a href="{{ route('single_show', ['id' => $post->id]) }}">
            <button>Cancel</button>
        </a>
    </form>
</div>
@endsection
