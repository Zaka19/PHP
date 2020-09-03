<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coche;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coche::all();
        return view('pages.List')->with('coches', $coches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coche::create($request->all());
        return redirect('coche')->with('success', 'Add succesfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coche = Coche::find($id);
        return view('pages.Element')->with('coche', $coche);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coche = Coche::find($id);
        return view('pages.Edit')->with('data', $coche);
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
        $update = ['make' => $request->make, 'model' => $request->model, 'produced_on' => $request->produced_on];
        Coche::where('id',$id)->update($update);
   
        return redirect('coche')->with('success','Great! Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coche::where('id',$id)->delete();
        return redirect('coche')->with('success','Great! Product updated successfully');
    }
}
