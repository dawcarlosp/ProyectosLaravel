<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = DB::select('Select * FROM productos WHERE valido = 1');
        return view('productos.index', ['lista'  => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $producto = new Producto();
        $producto->codigo = '1234567895';
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->existencia = $request->input('existencia');
        $producto->valido = 1;
        $producto->save();
        return redirect("/productos");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        return view('productos.show',[Producto::class, "producto" => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $producto = Producto::find($id);
       return view('productos.edit',[Producto::class, "producto" => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->existencia = $request->input('existencia');
        $producto->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $producto = Producto::findOrFail($id);
            $producto->forceDelete();
            return redirect('/productos');
        } catch (\Exception $e) {
            return redirect('/productos');
        }
        
    }
}
