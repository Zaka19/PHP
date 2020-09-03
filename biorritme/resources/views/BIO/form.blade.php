@extends('layouts.master')

@section('header')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="text-center font-weight-bold font-italic">BIORRITMES</h1>
    </div>
</div>
@endsection

@section('content')
<?php
$mydate = getdate();
$DateNow = new DateTime("$mydate[year]/$mydate[mon]/$mydate[mday]");
$result = $DateNow->format('Y-m-d');
?>
<div class="container">
    <p class="font-weight-bold font-italic"> Biorritmes, que son?</p>
    La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los animales,<br>
    cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes biorritmos que afectan<br>
    nuestro comportamiento en distintas maneras. Se ha comprobado estadísticamente que la energía<br>
    física se comporta cíclicamente en periodos de 23 días, la energía emotiva en periodos 28 días<br>
    y la energía intelectual en 33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza<br>
    a subir en una fase positiva, durante la cual las energías y las capacidades son altas.
    </p>
</div>

<div class="container">
    <form action="/result" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nom del usuari:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="birthDate">Data de naixement:</label>
            <input class="form-control" type="date" id="birthDate" name="birthDate" max=<?php echo $result; ?>>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('footer')
@endsection