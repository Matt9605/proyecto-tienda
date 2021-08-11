<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\Tienda;
use App\Models\Productos;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
       
        return view('venta.listar',compact('ventas'));
 //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendas = Tienda::all();
        $productos = Productos::all();
        return view('venta.crear',compact('tiendas','productos'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
       $request['vendedor_id'] = \Auth::user()->id;
        $venta=new Venta($request->except([
            'producto_id',
            'cantidad',
            'total',
            'valor'
        ]));
        $venta->save();
        foreach ($request->producto_id as $key => $producto) {
            $venta->productos()->attach($producto,[
                'cantidad'=>$request->cantidad[$key]
            ]);
        }
        return redirect('/ventas');
        //
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
        $venta = Venta::find($id);
       
        return view('venta.editar',compact($venta));
   //
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
        $venta = Venta::find($id);
        $venta ->fill($request->all());
        $venta ->save();
        return redirect()->back();
 //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
       
        return redirect()->back();
  //
    }
}
