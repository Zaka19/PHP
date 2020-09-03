@extends('layouts.master')
@section('content')
<a class="nav-link" href="{!! ('/coche/create') !!}"><button class="btn btn-primary">Add</button></a>
<div style="padding: 5px;">
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Produced</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coches as $coche)
            <tr>
                <th scope="row"> {{ $coche->id }}</th>
                <td>{{ $coche->make }}</td>
                <td>{{ $coche->model }}</td>
                <td>{{ $coche->produced_on }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/coche/{{ $coche->id }}"> <button type="button" class="btn btn-primary">Details</button></a>
                        <a href="/coche/{{ $coche->id }}/edit"><button type="button" class="btn btn-success">Edit</button></a>
                        <form method="POST" action="/coche/{{$coche->id}}">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection