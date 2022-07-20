<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = DB::select('select * from sales');
        $collectLista = collect($lista);
        return response()->json([
            'respuesta' => $lista,
            'msg' => "Solicitud Exitosa"
        ], 200);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //https://laravel.com/docs/9.x/queries#insert-statements
        //https://laravel.com/docs/9.x/database

        date_default_timezone_set('America/Lima');
        $date = date('Y-m-d H:i:s');
        $id_customer = $request->id_costumer;

        //Se realiza de esta forma porque no tenemos un Store procedures
        DB::insert('insert into sales (id_costumer, date_sale) values (?, ?)', 
        [$id_customer, $date]); //No se inserta el id_sales porque es auto incrementable

        return response()->json([
            'respuesta' => true,
            'msg' => "Creación Exitosa"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lista=DB::select("select*from sales where id_sale=?",[$id]);
        return response()->json([
           "respuesta" => $lista,
           "msg" => "solicitud exitosa",
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //Id se coloca en el url y request en el Body en postman (PUT)
    {
        $id_customer = $request->id_costumer;

        DB::update(
            'UPDATE sales SET id_costumer=? WHERE id_sale=?',
            [$id_customer, $id]
        );

        return response()->json([
            'respuesta' => true,
            'msg' => "Modificación Exitosa"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("DELETE FROM sales where id_sale=?",[$id]);
        return response()->json([
            "respuesta" => $id." Fue borrado",
            "msg" => "Eliminacion exitosa",
         ],200);
    }
}
