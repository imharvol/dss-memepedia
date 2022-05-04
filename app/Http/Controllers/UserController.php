<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    public function me()
    {
        // Redirigir al usuario al formulario de registro si no está logeado
        if (Auth::user() == null)
            return redirect(route('user.signin'));

        return view('editar-perfil');
    }

    public function create(Request $request)
    {
        // TODO: Comprobar si el usuario existe

        // Aqui tenemos que obtener los datos del usuario desde la request e introducirlo en la base de datos
        $user =  new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        // Una vez el usuario se ha creado correctamente, lo redirigimos al indice
        return redirect(route('index'));
    }

    public function show($username)
    {
        $user = User::firstWhere('username', $username);

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
        $user->username = $request->username;
        $user->surname = $request->surname;

        if ($request->password && $request->passwordConfirmation) {
            if ($request->password !== $request->passwordConfirmation) {
                return view('error-page', ['error_message' => 'Las contraseñas no coinciden']);
            }

            $user->password = Hash::make($request->password);
        } 

        // Guardamos la imagen
        if ($request->file('photo')) {
            $request->file('photo')->storeAs('public/users', $user->id);
        }

        $user->save();

        return back();
    }

    public function postsignin(Request $request)
    {

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect(route('index'));
        }

        return view('error-page', ['error_message' => 'Usuario o contraseña incorrectos']);
    }

    public function signout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('index'));
    }
}
