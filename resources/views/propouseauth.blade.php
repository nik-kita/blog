@extends('layouts.general')
<x-header title="Ooops...What is your name?"
          p="You should be our registered user for connecting to this functional."/>
@section('content')
    <div style="display: inline-block">
        <a href="{{ $back }}">Back</a>

    </div>
@endsection
