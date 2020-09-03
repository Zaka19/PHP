@extends('layouts.master')

@section('header')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="text-center font-weight-bold font-italic">RESULTATS</h1>
        <div class="text-center">
            <p class="font-weight-bold font-italic"> Tu, {{$nameUser}}...</p>
            Vas neixer el dia {{$birthDate}}, això provoca que el teu resultat sigui:</p>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <h5>Biorritme fisic => {{$resultRealF}}%</h5><br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo $resultGraphF . "%" ?>" aria-valuemin="-1" aria-valuemax="1"></div>
    </div>
    <br>
    <h5>Biorritme emotiu => {{$resultRealE}}%</h5><br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo $resultGraphE . "%" ?>" aria-valuemin="-1" aria-valuemax="1"></div>
    </div>
    <br>
    <h5>Biorritme intelectual => {{$resultRealI}}%</h5><br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo $resultGraphI . "%" ?>" aria-valuemin="-1" aria-valuemax="1"></div>
    </div>
</div>
@endsection

@section('footer')

@endsection