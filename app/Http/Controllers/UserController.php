<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user-list', ['users' => $users]);
    }

    public function signin()
    {
        return view('inicio-sesion');
    }

    public function signup()
    {
        return view('crear-cuenta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Aqui tenemos que obtener los datos del usuario desde la request e introducirlo en la base de datos
        $user1 =  new User();
        $user1->name = $request->name;
        $user1->email = $request->email;
        $user1->password = $request->password;
        $user1->nick = $request->username;
        $user1->surname = $request->surname;
        $user1->save();

        // Una vez el usuario se ha creado correctamente, lo redirigimos al indice
        return redirect(route('index'));
    }

    public function show($username)
    {
        $user = User::firstWhere('nick', $username);

        if ($user) {
            return view('user-profile', ['user' => $user]);
        } else {
            return view('error-page', ['error_message' => 'Usuario no encontrado!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
