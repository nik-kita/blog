@extends('layouts.general')
{{ $post->title }}
@section('content')
    <div>
        {{ $post->body }}
        <p>|
            @foreach($post->tags()->get() as $t)
                <a href="{{ route('searchByTag', ['tag' => $t->id]) }}">
                <span class="text-small text-secondary">{{ $t->name }}<span/>
                <a/> |
            @endforeach
        </p>
        <a href="#">
            <button>Like</button>
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



@endsection
