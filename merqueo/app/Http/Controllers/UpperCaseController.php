<?php

namespace App\Http\Controllers;

use App\UpperCase;
use Illuminate\Http\Request;

class UpperCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->hasFile('filetxt')) {
            $element = new UpperCase();
            $element->readFile($request->file('filetxt'));
        }
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UpperCase  $upperCase
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $upper = UpperCase::all();
        return view('show', compact('upper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UpperCase  $upperCase
     * @return \Illuminate\Http\Response
     */
    public function edit(UpperCase $upperCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UpperCase  $upperCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UpperCase $upperCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UpperCase  $upperCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpperCase $upperCase)
    {
        //
    }
}
