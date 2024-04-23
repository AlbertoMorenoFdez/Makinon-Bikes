<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

class IdiomaController extends Controller
{
    public function cambiarIdioma($idioma, Request $request)
    {
        App::setLocale($idioma);
        $response = redirect()->back();
        return $response->withCookie(cookie()->forever('idioma', $idioma));
    }
    
    
}
?>
