<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreHewanRequest;
use App\Http\Requests\UpdateHewanRequest;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardcust()
    {
        // dd(Auth::user()->email);
        return view('dashboardcust', [
            'hewans' => Hewan::all(),
            'users' => Auth::user()->fullname
        ]);
    }
    public function index()
    {
        return view('home', [
            'hewans' => Hewan::all()
        ]);
    }
    // public function anjing()
    // {
    //     return view('anjing', [
    //         'anjing' => Hewan::all()
    //     ]);
    // }

    public function table()
    {
        return view('TablePet', [
            'hewans' => Hewan::all()
        ]);
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
     * @param  \App\Http\Requests\StoreHewanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hewan::create([
            'name' => $request->name,
            'breed' => $request->breed,
            'colour' => $request->colour,
            'age' => $request->age,
            'weight' => $request->weight,
            'sex' => $request->sex,
            'kategoris_id' => $request->kategoris_id
        ]);
        return redirect('TablePet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function show(Hewan $hewan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Hewan::findOrFail($id);
        return view('petedit', [
            "pet" => $pet,
            "id" => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHewanRequest  $request
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pet = Hewan::findOrFail($id);
        $pet->name = $request->name;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->sex = $request->sex;
        $pet->status = $request->status;
        $pet->kategoris_id = $request->kategoris_id;
        $pet->save();
        return redirect('TablePet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = Hewan::findOrFail($id);
        $pet->delete();
        return redirect('TablePet');
    }
}
