@extends('layouts.general')
<x-header title="Our posts" p="You may search what you need by tags our by any matches for your words in 'Search'"/>

@section('content')
<div style="display: inline-block">

    @foreach($posts as $p)
        <a href="{{ route('single_show', ['id' => $p->id]) }}">
            <h4>{{ $p->title }}</h4>
        </a>
    @endforeach
</div>
@endsection
