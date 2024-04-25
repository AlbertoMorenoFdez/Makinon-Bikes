<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Funcion para hacer el login, crear el toke y redirigir a la página de inicio
     */
    /* public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Generar un token de acceso personal para el usuario autenticado
        $token = $request->user()->createToken('api-token');
        //dd($token->plainTextToken);

        // Almacenar el token en la sesión para que pueda ser recuperado después
        $request->session()->put('api_token', $token->plainTextToken);

        return redirect()->intended(RouteServiceProvider::HOME);
    } */

    /* public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();

    $request->session()->regenerate();

    // Generar un token de acceso personal para el usuario autenticado
    $token = $request->user()->createToken('api-token');

    // Almacenar el token en la sesión para que pueda ser recuperado después
    $request->session()->put('api_token', $token->plainTextToken);

    // Generar el enlace a la aplicación Angular con el token incluido
    $angularAppUrl = 'http://your-angular-app.com/login';
    $angularAppLink = $angularAppUrl . '?token=' . $token->plainTextToken;

    // Almacenar el enlace en la sesión
    $request->session()->put('angular_app_link', $angularAppLink);

    return redirect()->intended(RouteServiceProvider::HOME);
} */

    // Funcion para hacer el login, crear el token y devolverlo en la respuesta a modo de Json
    public function store(LoginRequest $request): JsonResponse
     {
        $request->authenticate();

        $request->session()->regenerate();

        // Generar un token de acceso personal para el usuario autenticado
        $token = $request->user()->createToken('api-token');
        

        // Almacenar el token en la sesión para que pueda ser recuperado después
        $request->session()->put('api_token', $token->plainTextToken);

        // Enviar el token en la respuesta
        return response()->json(['api_token' => $token->plainTextToken]);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
