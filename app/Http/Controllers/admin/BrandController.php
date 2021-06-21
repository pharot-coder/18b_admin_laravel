<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index()
    {
        return view('admin/brand');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'brandname' => 'required',
            'images' => 'required'
        ]);
    }
}