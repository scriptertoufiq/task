<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Shop;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomePageController extends Controller
{
    public function index()
    {
        $page = "home";
        $shopproducts = Shop::paginate(9);
        $categories = Category::all();
        $cart = Cart::content();
        return view('frontend.shop', compact('page', 'shopproducts', 'categories', 'cart'));
    }


    public function fetch_product_details(Request $request)
    {
        $id = $request->id;
        $product = Shop::find($id);
        return $product;
    }



    public function shop_category(Request $request)
    {
        $products = Shop::where('category_id', $request->id)->get();
        return $products;
    }


    public function Cart()
    {
        $cart = Cart::content();
        return view('frontend.cart', compact('cart'));
    }



    public function product_search()
    {
        $product_name = $_GET['search'];
        $shopproducts = Shop::where('name', 'like', '%' . $product_name . '%')->orderBy('created_at', 'DESC')->paginate(10);
        $cart = Cart::content();
        return view('frontend.search', compact('shopproducts', 'cart'));
    }
}
