<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Usuario::class],
            'nif' => ['required', 'string', 'max:9', 'unique:'.Usuario::class, 'regex:/^[0-9]{8}[A-Za-z]$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'numeric','digits:9'],
            'cp' => ['required', 'numeric','digits:5'],
        ]);

        $user = Usuario::create([
            'nombre' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nif' => $request->nif,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'cp' => $request->cp,
            'ciudad' => $request->ciudad,
            'rol' => 'user',  // Asignamos por refecto el rol de usuario para la tabla y luego lo cambiamos alli

        ]);

        //Generamos el token de acceso por si el usuario quiere acceder a la API de Angular y lo almacenamos en la sesion
        $token = $user->createToken('api-token');
        $request->session()->put('api_token', $token->plainTextToken);

        // Enviamos el correo de bienvenida
        Mail::to($user->email)->send(new WelcomeMail($user));

        event(new Registered($user));

        Auth::login($user);

        return redirect((RouteServiceProvider::HOME));
    }
}
