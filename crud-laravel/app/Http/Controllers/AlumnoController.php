<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$mensaje = session('mensaje');
        //$id = session('id');
        return view('alumnos.index',['lista'=>Alumno::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'matricula.required' => 'La matrícula es obligatoria.',
            'matricula.max' => 'La matrícula no puede tener más de 10 caracteres.',
            'matricula.unique' => 'La matrícula ya está registrada en otro alumno.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'fecha.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
        ];
        $request->validate([
            'matricula' => 'required|max:10|unique:alumnos',
            'nombre' => 'required| max: 255',
            'fecha' => 'required|date',
            'telefono' => 'required',
            'email' => 'nullable|email'], $messages);
        $alumno = new Alumno();
        $alumno->matricula = $request->input('matricula');
        $alumno->nombre = $request->input('nombre');
        $alumno->fecha_nacimiento = $request->input('fecha');
        $alumno->telefono = $request->input('telefono');
        $alumno->email = $request->input('telefono');     
        $alumno->save();
        return redirect("/alumnos")->with('mensajeStore', '¡Alumno añadido correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumno = Alumno::find($id);
        return view("alumnos.edit", [Alumno::class, "alumno" => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'matricula.required' => 'La matrícula es obligatoria.',
            'matricula.max' => 'La matrícula no puede tener más de 10 caracteres.',
            'matricula.unique' => 'La matrícula ya está registrada en otro alumno.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'fecha.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
        ];
        $request->validate([
            'matricula' => 'required|max:10|unique:alumnos,matricula,'. $id ,
            'nombre' => 'required| max: 255',
            'fecha' => 'required|date',
            'telefono' => 'required',
            'email' => 'nullable|email'], $messages);
            
            $alumno = Alumno::find($id);
            $alumno->matricula = $request->input('matricula');
            $alumno->nombre = $request->input('nombre');
            $alumno->fecha_nacimiento = $request->input('fecha');
            $alumno->telefono = $request->input('telefono');
            $alumno->email = $request->input('email');
            $alumno->save();
            return redirect()->route('alumnos.index')->with('mensajeUpdate', '¡Registro modificado!')->with('idUpdate',$id);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $alumno = Alumno::destroy($id);
        return redirect()->route('alumnos.index')->with('mensajeDestroy', '¡Alumno eliminado!')->with('idDestroy',$id);
    }
}
