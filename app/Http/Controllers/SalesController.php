<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type_product;
use App\Models\Product;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sales.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['products'] = 'tes';
        $data['type_products'] = Type_product::with('relasiToProduct')->orderBy('created_at','desc')->get();
        return view('sales.form_create', $data);
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
        //
    }

    public function loadDataTypeProduct(Request $request) {
        if (empty($request->get('id'))){
        exit;

        } else{
          $products = Product::where('type_id', $request->get('id'))->orderBy('description','asc')->get();
          foreach( $products as $data_prod ) {
             echo '<option value="'.$data_prod->id.'">'.$data_prod->description.'</option>';
          }
        }
        exit;
    }
}
