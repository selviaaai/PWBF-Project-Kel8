<?php

namespace App\Http\Controllers;

use App\Models\adoptme;
use App\Models\User;
use App\Models\Hewan;
use App\Models\Adoption;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class adoptmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adoptme', ['hewans' => Hewan::all()]);
    }

    public function tracking()
    {
        $kategori = Kategori::all();
        $adopt = Adoption::with(['User', 'Hewan'])->get();
        return view('usertracking', [
            'adopts' => $adopt,
            'kategori' => $kategori,
        ]);
    }

    public function adm()
    {
        $kategori = Kategori::all();
        $adopt = Adoption::with(['User', 'Hewan'])->get();
        return view('Adoption', [
            'adopts' => $adopt,
            'kategori' => $kategori,
        ]);
    }

    public function editadm($id)
    {
        $adoption = Adoption::findOrFail($id);
        return view('adoptedit', [
            'adoption' => $adoption,
            'id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $hewan = Hewan::all();
    //     return view('adoptme', ['hewans' => $hewan]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'fullname' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        //     'alamat' => 'required',
        //     'username' => 'required',
        //     'password' => 'required',
        //     'pickup_date' => 'required'
        // ]);

        // $user = new User;
        // $user->fullname = $request->fullname;
        // $user->email = $request->email;
        // $user->phone_number = $request->phone_number;
        // $user->alamat = $request->alamat;
        // $user->username = $request->username;
        // $user->password = $user->password;
        // $user->save();
        $id = Auth::user()->id;
        $adoption = new Adoption;
        $adoption->create([
            'user_id' => $id,
            'hewan_id' => $request->id,
            'pickup_date' => $request->date,
        ]);

        return redirect('/userhome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    // public function show(adoptme $adoptme)
    // {
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function edit(adoptme $id)
    {
        $user = User::find($id);
        return view('adoptme');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->status = $request->status;
        $adoption->save();
        return redirect('/Adoption');
        // $user = User::find($id);
        // $user->fullname =  $request->get('fullname');
        // $user->email = $request->get('email');
        // $user->phone_number = $request->get('phone_number');
        // $user->alamat = $request->get('alamat');
        // $user->username = $request->get('username');
        // $user->password = $request->get('password');
        // $user->save();
        // $adoption = new Adoption;
        // $adoption->create([
        //     'user_id' => $user->id,
        //     'hewan_id' => $request->id
        // ]);
        // return redirect('/userhome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function destroy(adoptme $adoptme)
    {
        //
    }
}
