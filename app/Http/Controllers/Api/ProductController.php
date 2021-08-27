<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\Product as ProductResource;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return api_success(
        //     array('data' => Product::all())
        // );
            $product = Product::all();
            return new ProductCollection($product);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return api_success(
            array('data' => $product)
        );
    }

    // public function search(Request $request){
    //     $key_word = $request->input('q');
    //     $products = Product::where('name', 'like', '%'.$key_word.'%')->get();
    //     return api_success(
    //         array('data' => $products)
    //     );
    // }

    // public function search(Request $request){
    //     $key_word = $request->input('q');
    //     $products = Product::where('name', 'like', '%'.$key_word.'%')->get();
    //         // array('data' => $products)
    //     return new ProductCollection($products);
    // }

    public function search(Request $request){
        $products = Product::where('id', $request->id)->get();
            // array('data' => $products)
        return api_success([
            'products'=>ProductResource::collection($products)
        ]);
    }
}
