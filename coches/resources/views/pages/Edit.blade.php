@extends('layouts.master')
@section('content')
<div class="container" style="margin-top:10px;">
    <form method="POST" action="/coche/{{$data->id}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="make">Make:</label>
            <input id="make" name="make" type="text" class="form-control" value="{{$data->make}}" />
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input id="model" name="model" type="text" class="form-control" value="{{$data->model}}" />
        </div>
        <div class="form-group">
            <label for="produced_on">Produced on:</label>
            <input id="produced_on" name="produced_on" type="date" class="form-control" value="{{$data->produced_on}}" />
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection