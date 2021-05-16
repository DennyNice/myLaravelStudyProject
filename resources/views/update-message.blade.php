@extends('layouts.app')

@section('title-block') Update record @endsection

@section('content')
    <h1>Update record</h1>

    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
        <!--Private key in laravel for all forms  -->
        @csrf

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Write your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Write your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="topicOfMessage">Topic of message</label>
            <input type="text" name="topicOfMessage" value="{{$data->topicOfMessage}}" placeholder="Topic of message" id="topicOfMessage" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Write your message">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
