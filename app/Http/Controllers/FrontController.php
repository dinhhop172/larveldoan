<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Ath;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = ProductBrand::all();
        return view('front.content', [
            'brands' => $brand,
        ]);
    }


    public function changeLang($language)
    {
        Session::put('website_language', $language);
        // App::setLocale($language);

        return redirect()->back();
        // if ($lang == 'vi') {
        //     App::setLocale('vi');
        //     return redirect()->back();
        // } else {
        //     App::setLocale('en');
        //     return redirect()->back();
        // }

        // if ($lang = 'en') {
        //     App::setLocale($lang);
        //     return redirect()->back();
        // } else {
        //     App::setLocale('en');
        //     return redirect()->back();
        // }
    }
    // public function newProduct(){
    //     $product = Product::select('name', 'desc')->orderBy('id', 'DESC')->first();
    //     return view('front.content', ['productt' => $product]);
    // }

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
        $product = Product::find($id);
        return view('front.detail', array('products' => $product));
    }

    public function brand($id)
    {
        $brands = ProductBrand::all();
        $brand = ProductBrand::findOrFail($id);

        return view('front.brand', [
            'brands' => $brands,
            'brand' => $brand
        ]);
    }
    public function contact()
    {
        return view('front.contact');
    }
}
