<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reporte;

class ReporteController extends Controller
{
    public function index()
    {
        return view('Reporte.index', ['reporte' => reporte::all()]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reporte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               
       $reporte = new reporte();
       $reporte->usuario_id = $request->get('u_id');
       $reporte->description = $request->get('desc'); 
       $reporte->amount = $request->get('amount');
       $reporte->save();

        return redirect('/reporte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(reporte $reporte)
    {
    
        return view('Reporte.show', ['reporte' =>$reporte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idr)
    {
       $reporte = reporte::findOrFail($idr);
        return view('Reporte.edit', ['reporte' =>$reporte]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idr)
    {
       $reporte = reporte::findOrFail($idr);
       
       $reporte->description = $request->get('desc');
       $reporte->amount = $request->get('amount');
       $reporte->save();

        return redirect('/reporte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idr)
    {
       $reporte = reporte::findOrFail($idr);
       $reporte->delete();

        return redirect('/reporte');
    }
    public function confirmDelete($idr){
        $reporte = reporte::findOrFail($idr);
        return view('Reporte.confirmDelete', ['report' =>$reporte]);
      
    }
}
