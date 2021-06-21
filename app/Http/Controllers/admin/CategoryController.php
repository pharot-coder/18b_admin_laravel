<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $data = Category::all();
        return view('admin/category', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'categoryname' => 'required'
        ]);

        $category = new Category;
        $category->categoryname = $request->post('categoryname');

        if (!$category->save()) {
            return redirect(url('/category'))->with('error', 'Add Fail !');
        } else {
            return redirect(url('/category'))->with('success', 'Add Success');
        }
    }
}