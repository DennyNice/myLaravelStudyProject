@extends('layouts.app')

@section('title-block') Main Page @endsection

@section('content')
    <h1>Main Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ligula est, iaculis id eros quis, rhoncus congue lacus. Curabitur sed ante eleifend, hendrerit dolor ac, laoreet augue. Ut pharetra tristique iaculis. Sed erat magna, tincidunt a pulvinar sit amet, ultrices ac nulla. Mauris ac nisl iaculis, pretium justo in, pharetra turpis. Vivamus sit amet porttitor felis, vel aliquet nunc. Ut quis egestas lectus. Mauris vulputate tempus est et feugiat. Ut vel lacus volutpat, varius diam eu, efficitur ipsum. Morbi sollicitudin risus ac luctus fringilla. Suspendisse ornare leo nibh, id rhoncus ante dignissim ut. Morbi dapibus ligula sagittis aliquet vulputate.</p>
@endsection

@section('aside')
    @parent
    <p>Extra text</p>
@endsection
