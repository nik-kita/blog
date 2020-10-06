@extends('layouts.general')
<x-header title="{{ $title }}" p="Create amazing post!"/>
@section('content')
    <form name="form" method="post" action="{{ route('save') }}">
        @csrf
        <input name="title" type="text" placeholder="Title_">
        <textarea name="body" for="form" placeholder="Fell free  to use markdown syntax!"></textarea>

            @foreach($tags as $t)
                    <input type="checkbox" id="{{ $t->name }}" name="tags[]" value="{{ $t->id }}">
                    <label for="{{ $t->name }}">{{ $t->name }}</label><br>
            @endforeach

        <input type="submit" value="Ok">
    </form>
@endsection
