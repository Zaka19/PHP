@extends('layouts.master')

@section('header')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div>
            <h1>ERROR 404</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<h5>{{$message_error}}
    <h5>
        @endsection

        @section('footer')

        @endsection