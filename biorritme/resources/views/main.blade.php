@extends('layouts.master')

@section('content')
<div style="padding-top: 18%; justify-content:center;text-align:center;">
    <h1 align="center" style="color: #f5b815; font-size: 50px;">𝓑𝓲𝓸𝓻𝓻𝓲𝓽𝓶𝓮𝓼</h1>
    <a href="{!! ('/form') !!}"><button>Calcula</button></a>
</div>
<video id="video" autoplay muted>
    <source src="Galaxy.mp4" type="video/mp4">
</video>
@endsection