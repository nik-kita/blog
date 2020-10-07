@extends('layouts.general')
<x-header title="{{ $title }}" p="Create amazing post!"/>
@section('content')
    <div style="display: inline-block">
        <form name="form" method="post" action="{{ route('save') }}">
            @csrf
            <input name="title" type="text" placeholder="Title_">
            @error('title')
            <span class="text-small text-danger">The length of the title should be between 3 and 50 characters</span>
            @enderror
            <textarea name="body" for="form" placeholder="Fell free  to use markdown syntax!"></textarea>
            @error('body')
            <span class="text-small text-danger">The body should contain minimum 20 characters</span>
            @enderror
            <hr>
            @foreach($tags as $t)
                <input type="checkbox" id="{{ $t->name }}" name="tags[]" value="{{ $t->id }}">
                <label for="{{ $t->name }}">{{ $t->name }}</label><br>
            @endforeach
            <input type="submit" value="Ok">
        </form>
    </div>
@endsection
