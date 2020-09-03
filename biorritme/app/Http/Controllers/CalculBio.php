<?php

namespace App\Http\Controllers;

use DateTime;
use FFI\Exception;
use Illuminate\Http\Request;

class CalculBio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BIO.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* sin((2*pi*dies)/23) */
        //$diff = $BirthDate->diff($DateNow);
        // $cicle = $diff->days / 23;
        // $radiant = $cicle * (2 * pi());
        // $SinRad = sin($radiant);
        // $Graf = ($SinRad + 1) * 50;

        try {
            if (empty($request->input('birthDate')) || empty($request->input('name'))) {
                return view('BIO.error', ['message_error' => 'Introduce los datos...']);
            } else {
                $BirthDate = new DateTime($request->input('birthDate'));
                $mydate = getdate();
                $DateNow = new DateTime("$mydate[year]/$mydate[mon]/$mydate[mday]");

                $bioFisic = $this->calculateBio($BirthDate, $DateNow, 23);
                $bioEmotiu = $this->calculateBio($BirthDate, $DateNow, 28);
                $bioIntelectual = $this->calculateBio($BirthDate, $DateNow, 33);

                // $diff = $BirthDate->diff($DateNow);
                // $bioFisic = sin(2 * pi() * $diff->days / 23);
                // $bioEmotiu = sin(2 * pi() * $diff->days / 28);
                // $bioIntelectual = sin(2 * pi() * $diff->days / 33);
                $newDate = date("d/m/Y", strtotime($request->input('birthDate')));

                return view('BIO.result', [
                    'nameUser' => $request->input('name'), 'birthDate' => $newDate,
                    'resultRealF' => round($bioFisic * 100, 0), 'resultGraphF' => ($bioFisic + 1) * 50,
                    'resultRealE' => round($bioEmotiu * 100, 0), 'resultGraphE' => ($bioEmotiu + 1) * 50,
                    'resultRealI' => round($bioIntelectual * 100, 0), 'resultGraphI' => ($bioIntelectual + 1) * 50
                ]);
            }
        } catch (Exception $e) {
            return view('BIO.error', ['message_error' => 'El calculo a salido mal...']);
        }
    }


    public function calculateBio($day_user, $day_actual, $days)
    {
        $diff = $day_user->diff($day_actual);
        return sin((2 * pi() * $diff->days) / $days);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
