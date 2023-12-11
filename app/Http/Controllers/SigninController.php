<?php

namespace App\Http\Controllers;

use App\Models\signin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SignIn');
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }

    public function signin()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password'), 'role' => 'admin'])) {
            return redirect('/dashboardadm');
        }
        if (Auth::attempt(['username' => request('username'), 'password' => request('password'), 'role' => 'customer'])) {
            return redirect('/dashboardcust');
        }
        return back()->withFail('Silahkan masukkan username dan password yang benar');
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
     * @param  \App\Models\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function show(signin $signin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function edit(signin $signin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, signin $signin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\signin  $signin
     * @return \Illuminate\Http\Response
     */
    public function destroy(signin $signin)
    {
        //
    }
}
