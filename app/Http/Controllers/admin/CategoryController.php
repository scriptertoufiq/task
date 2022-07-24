<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = "category";
        $category = Category::all();
        return view('admin.category.index',compact('page','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = "category";
        return view('admin.category.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->category;
        $category->save();
        $notification = array(
            'messege' => 'Tag Added Succesfully',
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
        $page = "category";
        $category = Category::find($id);
        return view('admin.category.edit',compact('page','category'));
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
        $category = Category::find($id);
        $category->name = $request->category;
        $category->save();
        if($category->save()) {
            $notification = array(
                'messege' => 'Category update successfully',
                'alert-type' => 'success',
            );
            return Redirect()->to('admin/category')->with($notification);
        }else{
            $notification = array(
                'messege' => 'Failed to update ',
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
        $category = Category::find($id);
        $category->delete();
        $notification = array(
            'messege' => 'Category Deleted successfully',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }
}
