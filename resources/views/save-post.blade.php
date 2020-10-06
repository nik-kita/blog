@extends('layouts.general')
<x-header title="Your post '{{ $post->title }}' is successfully saved!"
          p="You may to show, share, edit and even delete this post as its owner!"/>
@section('content')

    {{ $post->body }}

<p>|
    @foreach($post->tags()->get() as $t)
        <span class="text-small text-secondary">{{ $t->name }}<span/> |

    @endforeach
</p>

@endsection
