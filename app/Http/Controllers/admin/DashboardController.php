<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use  App\Models\Customer;
use App\Models\User;
use App\Models\Brand;
use App\Models\Product;

class DashboardController extends Controller
{

    //
    public function index()
    {
        $countCustomer = Customer::count('*');
        $countUsers = User::count('*');
        $countBrand  = Brand::count('*');
        $countProdcut = Product::count('*');
        return view('admin/dashboard', [
            'countCustomer' => $countCustomer,
            'countUsers' => $countUsers,
            'countBrand' => $countBrand,
            'countProduct' => $countProdcut
        ]);
    }
}