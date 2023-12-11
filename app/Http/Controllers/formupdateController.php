<?php

namespace App\Http\Controllers;

use App\Models\FormUpdate;
use Illuminate\Http\Request;

class formupdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('FormUpdate');
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
     * @param  \App\Models\FormUpdate  $formUpdate
     * @return \Illuminate\Http\Response
     */
    public function show(FormUpdate $formUpdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormUpdate  $formUpdate
     * @return \Illuminate\Http\Response
     */
    public function edit(FormUpdate $formUpdate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormUpdate  $formUpdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormUpdate $formUpdate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormUpdate  $formUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormUpdate $formUpdate)
    {
        //
    }
}
