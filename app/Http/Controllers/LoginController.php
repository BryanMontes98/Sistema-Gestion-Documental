<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
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

        /* $password = 'admin';
        echo Hash::make($password);
        die(); */

    $credentials = $request->validate([
        'email' => 'email|required',
        'password' => 'string|required',
    ]);

    $user = \App\Models\User::where('email', $credentials['email'])->first();

    if (!$user) {

        return redirect()
            ->back()
            ->withErrors(['email' => 'El correo ingresado no está registrado.'])
            ->withInput();
    }

    if (!Hash::check($credentials['password'], $user->password)) {
        return redirect()
            ->back()
            ->withErrors(['password' => 'La contraseña es incorrecta.'])
            ->withInput();
    }

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('home');
    }

    return redirect()
        ->back()
        ->withErrors(['general' => 'Ocurrió un error al intentar iniciar sesión.'])
        ->withInput();
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
