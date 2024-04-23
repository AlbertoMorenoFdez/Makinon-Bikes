<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Funcion que nos devuelve todos los datos del usuario en la vista perfil
     */

    public function usuarioAutentificado()
    {
        $user = Auth::user();

        if ($user) {
            //return response()->json(['usuario' => $user], 200);
            return view('usuario.perfil', ['usuario' => $user]);
        } else {

            return redirect()->route('login');
        }
    }

    /**
     * Funcion que nos devuelve el perfil del usuario
     */
    public function perfil(Request $request, $id)
    {
        $user = Auth::user();
        Log::info('Usuario autenticado en perfil:', ['user' => $user]);
        return view('usuario.perfil', ['usuario' => $user]);
    }

    /**
     * Función que nos devuelve la vista de la ficha de un usuario para el adminsitrador
     */
    public function fichaUsuario($id){
        $usuario = Usuario::find($id);
        return view('usuario.fichaUsuarioAdmin', ['usuario' => $usuario]);
    }

    /**
     * Funcion que nos devuelve la vista para editar el perfil del usuario
     */
    public function editarUsuario()
    {
        $user = Auth::user();
        return view('usuario.modificarUsuario', ['usuario' => $user]);
    }

    /**
     * Funcion para eliminar la cuenta del usuario
     */
    public function deleteUsuario()
    {
        $user = Auth::user();
        if ($user) {
            $user->delete();
            return redirect()->route('home');
        }
    }

    /**
     * Funcion que nos devuelve la vista para cambiar la contraseña del usuario
     */

    public function cambiarPassword(){
        return view('usuario.cambiarPassword');
    }

    /**
     * Funcion que nos permite cambiar la contraseña del usuario
     */
    public function actualizarPassword(Request $request){

        //dd($request->all());
        $request->validate([
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            dd('Este código se está ejecutando', $request->current_password, $user->password);
            return back()->withErrors(['current_password' => 'La contraseña actual es incorrecta']);
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->route('usuario.perfil')->with('success', 'Contraseña actualizada con éxito');
    }

    /**
     * Funcion que nos permite actualizar el perfil del usuario
     */
    public function updateUsuario(Request $request)
    {
        Auth::check();
        $user = Auth::user();

        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:150',
            'email' => 'required|string|email',
            'nif' => 'required|string|regex:/^[0-9]{8}[a-zA-Z]$/',
            'telefono' => 'required|string|min:9|max:9',
            'direccion' => 'required|string|max:255',
            'cp' => 'required|string|min:5|max:5',
            'ciudad' => 'required|string|max:100',
        ]);

        if ($user) {
            $user->update([
                'nombre' => $request->nombre,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
                'nif' => $request->nif,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'cp' => $request->cp,
                'ciudad' => $request->ciudad,
            ]);

            return redirect()->route('usuario.perfil')->with('success', 'Perfil actualizado con éxito');
        } else {
            return redirect()->route('login');
        }

        /**
         * Otra forma de hacerlo
         */
        /* if ($user) {
            $user->nombre = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->email = $request->email;
            $user->nif = $request->nif;
            $user->telefono = $request->telefono;
            $user->direccion = $request->direccion;
            $user->cp = $request->cp;
            $user->ciudad = $request->ciudad;
    
            $user->save();
    
            return redirect()->route('usuario.perfil');
        } else {
            return redirect()->route('login');
        } */
    }

    /**
     * Funcion que nos devuelve la vista del panel de administrador
     */
    public function panelAdmin()
    {

        $user = Auth::user();
        Log::info('Usuario autenticado en panelAdmin:', ['user' => $user]);


        if ($user && $user->rol == 'admin') {

            return view('usuario.panelAdmin', ['usuario' => $user]);
        } else {

            return redirect()->route('/');
        }
    }

    /**
     * Funcion que nos devuelve la vista de la lista de usuarios
     */

    public function listarUsuarios()
    {
        $usuarios = Usuario::paginate(10);
        return view('usuario.listadoUsuarios', ['usuarios' => $usuarios]);
    }

    /**
     * Funcion que nos devuelve la vista para añadir un usuario por parte de la Administración
     */
    public function nuevoUsuarioAdmin()
    {
        return view('usuario.añadirUsuario');
    }

    /**
     * Funcion que nos permite añadir un usuario por parte de la Administración
     */
    public function agregarUsuarioAdmin(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:150',
            'email' => 'required|string|email',
            'nif' => 'required|string|regex:/^[0-9]{8}[a-zA-Z]$/',
            'telefono' => 'required|string|min:9|max:9',
            'direccion' => 'required|string|max:255',
            'cp' => 'required|string|min:5|max:5',
            'ciudad' => 'required|string|max:100',
            'password' => 'required|string|min:8',
            'rol' => 'required'
        ]);

        // dd($request->all());

        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->nif = $request->nif;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        $usuario->cp = $request->cp;
        $usuario->ciudad = $request->ciudad;
        $usuario->password = bcrypt($request->password);
        $usuario->rol = $request->rol;

        $usuario->save();

        return redirect()->route('listadoUsuarios')->with('success', 'Usuario añadido con éxito');
    }

    /**
     * Función que nos permite buscar un usuario por su nombre
     */

    public function buscarUsuario(Request $request)
    {
        $usuarios = Usuario::where('nombre', 'like', '%' . $request->busqueda . '%')->get();
        return view('usuario.listadoUsuarios', ['usuarios' => $usuarios]);
    }

    /**
     * Función que nos devuelve la vista para editar los datos del usuario por parte de la Administración
     */
    public function editarUsuarioAdmin($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.modificarUsuarioAdmin', ['usuario' => $usuario]);
    }

    /**
     * Función que nos permite pasar los datos de un usuario a la vista para poder modficarlos
     */
    public function modificarUsuarioAdmin($id)
    {
        $usuario = Usuario::find($id);
        return view('modificarUsuarioAdmin', ['usuario' => $usuario]);
    }

    /**
     * Función que nos permite actualizar los datos de un usuario desde el panel de Administración.
     */
    public function updateUsuarioAdmin(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:150',
            'email' => 'required|string|email',
            'nif' => 'required|string|regex:/^[0-9]{8}[a-zA-Z]$/',
            'telefono' => 'required|string|min:9|max:9',
            'direccion' => 'required|string|max:255',
            'cp' => 'required|string|min:5|max:5',
            'ciudad' => 'required|string|max:100',
            'rol' => 'required'
        ]);

        $usuario = Usuario::find($request->id);
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password= bcrypt($request->password);
        $usuario->nif = $request->nif;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        $usuario->cp = $request->cp;
        $usuario->ciudad = $request->ciudad;
        $usuario->rol = $request->rol;

        $usuario->save();

        return redirect()->route('listadoUsuarios')->with('success', 'Usuario modificado con éxito');
    }

    /**
     * Función que nos permite eliminar un usuario por parte de la administración
     */
    public function eliminarUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('listadoUsuarios')->with('success', 'Usuario eliminado con éxito');
    }
}
