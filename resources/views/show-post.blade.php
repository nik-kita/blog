@extends('layouts.general')
{{ $post->title }}
@section('content')
    {{ $post->body }}

    <p>|
        @foreach($post->tags()->get() as $t)
            <span class="text-small text-secondary">{{ $t->name }}<span/> |

        @endforeach
    </p>



@endsection
