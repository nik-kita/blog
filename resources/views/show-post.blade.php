@extends('layouts.general')
<x-header title="Now you reading '{{ $post->title }}' post" p="If you are login you may like this post or comment. If you are its owner you have infinity power on it!"/>
@section('content')
    <div style="display: inline-block">

        <div>
            @parsedown($post->body)
            <p>|
                @foreach($post->tags()->get() as $t)
                    <a href="{{ route('searchByTag', ['tag' => $t->id]) }}">
                <span class="text-small text-secondary">{{ $t->name }}<span/>
                <a/> |
                @endforeach
            </p>
            <p>
                <span id='oldLikes' style="display: none">{{ $post->likes }}</span>
                This post has <span id="likes">{{ $post->likes }}</span> likes
            </p>
            <a href="#">
                <button onclick="like()">Like</button>
                <script>
                    function like() {
                        let old = Number(document.getElementById('oldLikes').textContent)
                        let current = Number(document.getElementById('likes').textContent)
                        if(old === current) {
                            current++
                        } else {
                            current--
                        }
                        document.getElementById('likes').textContent = current
                    }
                </script>
            </a>
            <a href="{{ route('edit', ['id' => $post->id]) }}">
                <button>Edit</button>
            </a>
            <a href="{{ route('delete', ['id' => $post->id]) }}">
                <button>Delete</button>
            </a>
        </div>

        <a href="{{ route('addComment', ['id' => $post->id]) }}">
            <button>Add Comment</button>
        </a>
        @if(count($post->comments()->get()) > 0)
            <button onclick="document.getElementById('comments').style.display='block'">Show Comments</button>
            <button onclick="document.getElementById('comments').style.display='none'">Hide Comments</button>
            <div id="comments" style="display: none">
                @foreach($post->comments()->get() as $c)

                    <x-comment text="{{ $c->body }}" author="{{ App\Models\User::find($c->user_id)->name }}"/>
                @endforeach
            </div>
        @endif
    </div>



@endsection
