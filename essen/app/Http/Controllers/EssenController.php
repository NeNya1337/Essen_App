<?php

namespace App\Http\Controllers;

use App\Models\Essen;
use App\Models\EssenTypen;
use Illuminate\Http\Request;

class EssenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fleisch = Essen::all()
            ->where('essen_typen_id','1');
        $beilage = Essen::all()
            ->where('essen_typen_id','3');
        $saettigung = Essen::all()
            ->where('essen_typen_id','4');

        return view('essen.index', ['fleisch' => $fleisch, 'beilage' => $beilage, 'saettigung' => $saettigung]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $essenTypen = EssenTypen::all();
        //dd($essenTypen);
        return view('essen.create', ['essenTypen' => $essenTypen]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $essen = Essen::create([
            'name' => $request->input('name'),
            'essen_typen_id' => $request->input('essen_typen_id'),
            'kalorien' => $request->input('kalorien')
        ]);
        return redirect('/essen');
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
