<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function display()
    {
        $products = $this->product->getProducts();
        return \View::make('clientes.index')->with(['products' => $products]);
    }


    public function menu()
    {
        $products = $this->product->getProducts();
        return \View::make('clientes.menu')->with(['products' => $products]);
    }

    public function gallery()
    {
        $products = $this->product->getProducts();
        return \View::make('clientes.gallery')->with(['products' => $products]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name', 'desc')->paginate(10);
        return \View::make('admin.table')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     * By default, the product is registered with status '1', that is, 'active'
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();
        //We get the image's name
        $path = $this->product->uploadImage($request);
        $product = new Product;
        $product->name = $validatedData['name'];
        $product->slug = $validatedData['slug'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->image_path = $path;
        $product->status = 1;
        $product->save();

        return redirect('/products')->with('success_msg', 'Producto registrado');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return \View::make('admin.edit')->with(['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $validatedData = $request->validated();
        $product = Product::find($id);
        //We check if the user has selected a new image, if not,
        //we leave the image that was already assigned
        $path = $this->product->uploadImage($request) ?: $product['image_path'];
        $product->name = $validatedData['name'];
        $product->slug = $validatedData['slug'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->image_path = $path;
        //We check if the user has disabled the visibility of the product in the client's index
        $request->input('status') ? $product->status = 0 : $product->status = 1;
        $product->save();
        return redirect('/products')->with('success_msg', 'Producto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect('/products')->with('success_msg', 'Producto eliminado');
    }
}
