<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'username' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
    }

    protected function create(Request $request)
    {
        // return User::create([
        //     'username' => $data['username'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'fullname' => $data['fullname'],
        //     'number' => $data['phone_number'],
        //     'alamat' => $data['alamat'],
        // ]);
        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'phone_number' => $request->number,
        ]);
        return redirect('/signIn');
    }

    public function index()
    {
        return view('SignUp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function show(SignUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function edit(SignUp $signUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SignUp $signUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(SignUp $signUp)
    {
        //
    }
}
