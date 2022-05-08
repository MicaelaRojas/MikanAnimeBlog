<?php

namespace App\Http\Controllers;
use App\producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = producto::get();
      return view('home')->with('productos', $productos);
    }

    public function show($idproducto)
    {
      // Devuelve la producto seleccionada por id.
      $producto = producto::find($idproducto);
      return view('productos.show')->with('producto', $producto);
    }

    public function destroy($idproducto)
  {
    producto::destroy($idproducto);
    return redirect('productos')->with('success','Registro eliminado satisfactoriamente');
  }

  public function edit($idproducto)
  {
    $producto = producto::findOrFail($idproducto);
    return view('productos.edit',compact('producto'));
  }

  public function update(Request $request,$idproducto)
  {
    $producto=producto::findOrFail($idproducto);
    $producto->nombre_p=$request->input('nombre_p');
    $producto->marca=$request->input('marca');
    $producto->precio=$request->input('precio');
    $producto->cantidad=$request->input('cantidad');
    $producto->categoria=$request->input('categoria');

    $producto->save();
    return redirect()->route('productos.index');
  }

  public function create()
  {
    return view('productos.create');
  }

  public function store(Request $request)
  {
    $producto = new producto;
    $producto->nombre_p=$request->input('nombre_p');
    $producto->marca=$request->input('marca');
    $producto->precio=$request->input('precio');
    $producto->cantidad=$request->input('cantidad');
    $producto->categoria=$request->input('categoria');
    $producto->save();
    return redirect()->route('productos.index');
  }
}
