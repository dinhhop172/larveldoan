<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Repositories\BrandRepository;
use Illuminate\Http\Request;
use App\Http\Resources\Brand as BrandResource;
use App\Http\Resources\BrandCollection;

class BrandController extends Controller
{
//    protected $brandRepository;
//
//    public function __construct(BrandRepository $repository)
//    {
//        $this->brandRepository = $repository;
//    }

    // public function index()
    // {
    //     $brand = ProductBrand::all();
    //     return api_success(array('brands'=>BrandResource::collection($brand)), 200);
    // }
    public function index()
    {
        $brand = ProductBrand::all();
        return new BrandCollection($brand);
    }

    // public function show($id)
    // {
    //     $brand = ProductBrand::findOrFail($id);
    //     return api_success(
    //         array('data' => $brand->products)
    //     );
    // }

    public function show($id)
    {
        $brand = ProductBrand::findOrFail($id);
        return new BrandResource($brand);
    }

    public function get(Request $request){
        $brand_id = ProductBrand::findOrFail($request->id);
        return new BrandResource($brand_id);
    }

    // public function search(Request $request, $id){
    //     $product_brand = ProductBrand::find($id);
    //     $products = $product_brand->products->where('name', 'like', '%q%');
    //     return api_success(
    //         array('data' => $product_brand->$products)
    //     );
    // }

    public function search(Request $request){
        $brands = ProductBrand::where('name','like', '%'.$request->name.'%')->get();
        return new BrandCollection($brands);
    }

    public function create(Request $request){
        $atttributes = $request->all();
        $result = $this->ProductBrand::all()->create($atttributes);
        return api_success(
            array('data' => $result)
        );
    }
}
