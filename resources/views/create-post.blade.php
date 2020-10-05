@extends('layouts.general')
<x-header title="{{ $title }}" p="Create amazing post!"/>
@section('content')
    <form name="form">
        <input type="text" placeholder="Title_">
        <textarea for="form" placeholder="Fell free  to use markdown syntax!"></textarea>

            @foreach($tags as $t)
                    <input type="checkbox" id="{{ $t->name }}" name="{{ $t->name }}" value="{{ $t->id }}">
                    <label for="{{ $t->name }}">{{ $t->name }}</label><br>
            @endforeach

        <input type="submit" value="Ok">
    </form>
@endsection
