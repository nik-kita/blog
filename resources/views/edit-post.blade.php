@extends('layouts.general')
<x-header title="Editing post '{{ $post->title }}'" p="Be careful! These changes impossible come back."/>
@section('content')
    <form name="form" method="post" action="{{ route('update', ['id' => $post->id]) }}">
        @csrf
        <input type="hidden" name="postId" value="{{ $post->id }}">
        <input name="title" type="text" value="{{ $post->title }}">
        @error('title')
        <span class="text-small text-danger">The length of the title should be between 3 and 50 characters</span>
        @enderror
        <textarea name="body" for="form">{{ $post->body }}</textarea>
        @error('body')
        <span class="text-small text-danger">The body should contain minimum 20 characters</span>
        @enderror
{{--        TODO--}}
{{--        @foreach($tags as $t)--}}
{{--            <input type="checkbox" id="{{ $t->name }}" name="tags[]" value="{{ $t->id }}">--}}
{{--            <label for="{{ $t->name }}">{{ $t->name }}</label><br>--}}
{{--        @endforeach--}}
{{--        TODO--}}
        <input type="submit" value="Ok">
    </form>
@endsection
