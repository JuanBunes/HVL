<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();
        return view('productos.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        return view('productos.create')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre_producto = $request->get('nombre_producto');
        $productos->categoria = $request->get('categoria');
        $productos->precio = $request->get('precio');
        $productos->descripcion = $request->get('descripcion');
        $validated = $request->validate([
            'nombre_producto' => 'required',
            'categoria' => 'required',
            'precio' => 'required|gte:0'
        ]);

        //Logica cloudinary
        $this->validate($request, [
            'avatar' => 'image|mimes:jpeg,png,jpg|max:1500|required',
        ]);
        $image_name = $request->file('avatar')->getRealPath();
        Cloudder::upload($image_name, null, array(
            "folder" => "huella_verde",  "overwrite" => FALSE,
            "resource_type" => "image", "responsive" => TRUE
        ));
        $public_id = Cloudder::getPublicId();
        $productos->imagen = $public_id;

        $productos->save();

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        $categorias=Categoria::all();
        return view('productos.edit')->with('producto',$producto)
        ->with('categorias',$categorias);
    }

    public function editImagen($id)
    {
        $producto=Producto::find($id);
        return view('productos.editimagen')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=Producto::find($id);
        $producto->nombre_producto = $request->get('nombre_producto');
        $producto->categoria = $request->get('categoria');
        $producto->precio = $request->get('precio');
        $producto->descripcion = $request->get('descripcion');
        $validated = $request->validate([
            'nombre_producto' => 'required',
            'categoria' => 'required',
            'precio' => 'required|gte:0'
        ]);

        $producto->save();

        return redirect('/productos');
    }

    public function updateImagen(Request $request, $id)
    {
        $producto=Producto::find($id);
        //Sube la imagen nueva
        $this->validate($request, [
            'avatar' => 'image|mimes:jpeg,png,jpg|max:1500|required',
        ]);
        $image_name = $request->file('avatar')->getRealPath();
        Cloudder::upload($image_name, null, array(
            "folder" => "huella_verde",  "overwrite" => TRUE,
            "resource_type" => "image", "responsive" => TRUE
        ));
        $public_id = Cloudder::getPublicId();
        $producto->imagen = $public_id;

        $producto->save();

        return redirect('/productos');
    }

    public function getComentarios($id)
    {
        $comentarios = Producto::find($id)->comentarios()->get();
        return view('productos.comentarios')->with('comentarios',$comentarios);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::find($id);

        //Eliminar la imagen en cloudinary
        $public_id = $producto->imagen;
        Cloudder::destroy($public_id, null);
        $producto->delete();

        return redirect('/productos');
    }
}
