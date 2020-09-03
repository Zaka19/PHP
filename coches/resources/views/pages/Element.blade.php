@extends('layouts.master')
@section('content')
<div class="container" style="margin-top:10px;">
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" value="{{ $coche->make }}" readonly />
    </div>
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" value="{{ $coche->model }}" readonly />
    </div>
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" value="{{ $coche->produced_on }}" readonly />
    </div>
    <a href="{!! ('/coche') !!}" <button class="btn btn-info">Cancel</button></a>
    <form method="POST" action="/coche/{{$coche->id}}">
        {{ csrf_field() }}
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection