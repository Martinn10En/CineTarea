<?php

namespace App\Http\Controllers;

use App\Funtion;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuntionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funtions = DB::table('funtions')->paginate(3);
        return view('funtions.index', compact('funtions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('funtions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Funtion::create($request->all());
        return redirect()->route('funtions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Funtion $funtion
     * @return \Illuminate\Http\Response
     */
    public function show(Funtion $funtion)
    {
        return view('funtions.show', compact('funtion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Funtion $funtion
     * @return \Illuminate\Http\Response
     */
    public function edit(Funtion $funtion)
    {
        return view('funtions.edit', compact('funtion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Funtion $funtion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funtion $funtion)
    {
        $request->validate(
            [
                'start' => 'required',
                'end' => 'required',
                'available' => 'required',
                'type' => 'required'
            ]);


        $funtion->update($request->all());
        return redirect()->route('funtions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Funtion $funtion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funtion $funtion)
    {
        $funtion->delete();
        return redirect()->route('funtions.index');
    }
}
