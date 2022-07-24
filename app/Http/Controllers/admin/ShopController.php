<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = "shop";
        $shop = Shop::all();
        return view('admin.shop.index', compact('shop', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = "shop";
        $category = Category::orderBy('name', 'asc')->get();
        return view('admin.shop.create', compact('page', 'category'));
    }


    public static function uploadImage($image)
    {
        $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/admin/img/shop/thumbsnil');
        $img = \Intervention\Image\Facades\Image::make($image->getRealPath());
        // backup status
        $img->backup();
        //image for thumb
        $img->resize(300, 300)->save($destinationPath . '/' . $imageName);
        $img->reset();
        //image for for slider
        $destinationPath = public_path('/admin/img/shop/featured');
        $img->resize(580, 580)->save($destinationPath . '/' . $imageName);
        return $imageName;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'img' => 'required',
            'sort_des' => 'required',
        ]);
        $shop = new Shop();
        $shop->name = $request->name;
        $shop->price = $request->price;
        $shop->category_id = $request->category;
        $shop->sort_des = $request->sort_des;
        $photo = $request->file('img');
        $imageName = $this->uploadImage($photo);
        $shop->img = $imageName;
        $shop->save();
        $notification = array(
            'messege' => 'Team Member added successfully',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
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
        $page = "shop";
        $shop = Shop::find($id);
        $category = Category::orderBy('name', 'asc')->get();
        return view('admin.shop.edit', compact('shop', 'page', 'category'));
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
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'sort_des' => 'required',
        ]);

        $shop = Shop::find($id);
        $shop->name = $request->name;
        $shop->price = $request->price;
        $shop->category_id = $request->category;
        $shop->sort_des = $request->sort_des;
        if ($request->hasFile('img')) {
            $photo = $request->file('img');
            $imageName = $this->uploadImage($photo);
            $shop->img = $imageName;
        }
        if ($shop->save()) {
            $notification = array(
                'messege' => 'Product Update successfully',
                'alert-type' => 'success',
            );
            return Redirect()->to('admin/shop')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Failed to update product',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        $notification = array(
            'messege' => 'Product Delete Successfully',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }
}
