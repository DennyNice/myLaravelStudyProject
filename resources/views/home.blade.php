@extends('layouts.app')

@section('title-block') Main Page @endsection

@section('content')
    <h1>Main Page</h1>
@endsection

@section('aside')
    @parent
    <p>Extra text</p>
@endsection
