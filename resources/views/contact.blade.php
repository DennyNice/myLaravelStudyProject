@extends('layouts.app')

@section('title-block') Contact Page @endsection

@section('content')
    <h1>Contact Page</h1>

    <form action="{{route('contact-form')}}" method="post">
        <!--Private key in laravel for all forms  -->
        @csrf

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" name="name" placeholder="Write your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Write your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="topicOfMessage">Topic of message</label>
            <input type="text" name="topicOfMessage" placeholder="Topic of message" id="topicOfMessage" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Write your message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

@endsection
