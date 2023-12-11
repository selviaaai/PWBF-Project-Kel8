<?php

namespace App\Http\Controllers;

use App\Models\dashboardadm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardadm');
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
     * @param  \App\Models\dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function show(dashboardadm $dashboardadm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboardadm $dashboardadm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboardadm $dashboardadm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboardadm  $dashboardadm
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboardadm $dashboardadm)
    {
        //
    }
}
