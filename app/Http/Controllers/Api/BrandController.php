<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Repositories\BrandRepository;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandRepository;

    public function __construct(BrandRepository $repository)
    {
        $this->brandRepository = $repository;
    }

    public function index()
    {
        return api_success(
            array('data' => $this->brandRepository->all())
        );
    }


    public function show($id)
    {
        $brand = ProductBrand::findOrFail($id);
        return api_success(
            array('data' => $brand->products)
        );
    }

    public function search(Request $request, $id){
        $product_brand = ProductBrand::find($id);
        $products = $product_brand->products->where('name', 'like', '%q%');
        return api_success(
            array('data' => $product_brand->$products)
        );
    }

    public function create(Request $request){
        $atttributes = $request->all();
        return api_success(
            array('data' => $this->brandRepository->create($atttributes))
        );
    }
}
