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
        // TODO: Comprobar si el usuario existe

        // Aqui tenemos que obtener los datos del usuario desde la request e introducirlo en la base de datos
        $user =  new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->nick = $request->username;
        $user->surname = $request->surname;
        $user->save();

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

    public function delete(Request $request)
    {
        $user = User::firstWhere('id', $request->id);
        $user->delete();
        return back();
    }

    public function update(Request $request)
    {
        $user = User::firstWhere('id', $request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nick = $request->username;
        $user->surname = $request->surname;

        $user->save();

        return back();
    }
}
