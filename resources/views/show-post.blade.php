@extends('layouts.general')
{{ $post->title }}
@section('content')
    <div>
        {{ $post->body }}
        <p>|
            @foreach($post->tags()->get() as $t)
                <span class="text-small text-secondary">{{ $t->name }}<span/> |
            @endforeach
        </p>
    </div>

    <a href="{{ route('addComment', ['id' => $post->id]) }}">
        <button>Add Comment</button>
    </a>
    <button onclick="document.getElementById('comments').style.visibility='visible'">Show Comments</button>
    <button onclick="document.getElementById('comments').style.visibility='hidden'">Hide Comments</button>
    <div id="comments" style="visibility: hidden">
        @foreach($post->comments()->get() as $c)

            <x-comment text="{{ $c->body }}" author="{{ App\Models\User::find($c->user_id)->name }}"/>
        @endforeach
    </div>



@endsection
