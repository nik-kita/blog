@extends('layouts.general')
<x-header title="{{ $title }}" p="Create amazing post!"/>
@section('content')
    <form name="form">
        <input type="text" placeholder="Title_">
        <textarea for="form" placeholder="Fell free  to use markdown syntax!"></textarea>
        <select name="tags">
            <option value="php">PHP</option>
            <option value="java">Java</option>
        </select>
        <input type="submit" value="Ok">
    </form>
@endsection
