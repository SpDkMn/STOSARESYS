<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product as Product;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = Product::with('stocks')->get();
      $string = "{\"data\": [";
      foreach($product as $p){
        $string .= "[";
        $string .= "\"".$p->codigo."\",";
        $string .= "\"".$p->nombre."\",";
        $string .= "\"".$p->precio_unitario."\",";
        $string .= "\"".$p->precio_docena."\",";
        $string .= "\"".$p->stocks[0]->stock."\",";
        $string .= "\"".
        "<button type='buttonSSS' class='btn btn-success btn-circle' data-id='".$p->id."'><i class='fa fa-pencil'></i></button>".
        "<button type='button' class='btn btn-danger btn-circle buttondeleted' data-id='".$p->id."' data-toggle='modal' data-target='#deletedModal'><i class='fa fa-times'></i></button>"
        ."\"";
        $string .= "],";
      }
      $string = substr ($string, 0, strlen($string) - 1);
      $string .= "]}";
        return $string;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        return Product::destroy($id);
    }
}
