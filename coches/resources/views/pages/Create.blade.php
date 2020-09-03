@extends('layouts.master')
@section('content')
<div class="container" style="margin-top:10px;">
    <form method="post" action="{{ route('coche.store') }}">
        @csrf
        <div class="form-group">
            <label for="make">Make:</label>
            <input id="make" name="make" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input id="model" name="model" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label for="produced_on">Produced on:</label>
            <input id="produced_on" name="produced_on" type="date" class="form-control" />
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection