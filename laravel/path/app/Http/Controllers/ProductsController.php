<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pagina principal
        //esse método é executado quando recebe uma requisição GET /products
        // a action que ele executa é index, e a rota que ele cria é a products.index
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pagina de criação
        //GET /products/create
        //Rota products.create


        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // execução da inserção
        //POST /products
        //Rota products.store

        Product::create($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //pagina de visualziação
        //GET /products/{$id}
        //Rota products.create
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pagina de edição
        //GET /products/{$id}/edit
        //Rota products.edit

        $product = Product::find($id);
        return view('products.edit', ['product'=>$product]);
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
        //execução da atualização
        //PUT/PATCH /products/{$id}
        //Rota products.update

        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //execução do delete
        //DELETE /products/{$id}
        //Rota products.delete

        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
