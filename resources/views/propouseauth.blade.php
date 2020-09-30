@extends('layouts.general')
<x-header :title="Ooops...What is your name?"
          :p="You should be our registered user for connecting to this functional."/>
@section('content')
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
@endsection
