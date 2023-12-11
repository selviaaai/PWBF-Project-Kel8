<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TableUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TableUser');
    }

    public function table()
    {
        return view('TableUser', [
            'users' => User::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->number,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'role' => $request->role,
            'password' => bcrypt($request->password)
        ]);
        return redirect('TableUser');
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
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function show(tableUser $tableUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edituser', [
            'user' => $user,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone_number = $request->number;
        $user->alamat = $request->alamat;
        $user->username = $request->username;
        $user->role = $request->role;
        $user->save();
        return redirect('TableUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('TableUser');
    }
}
