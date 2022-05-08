<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\producto;
class productoController extends Controller
{

  
    public function index()
    {
      // Devolverá todos los productos
      $productos = producto::get();
      return view('productos.index')->with('productos', $productos);
    }
    /**
   * Muestra el producto seleccionada por id.
   * @param $idproducto 
   * @return Response
   */
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
