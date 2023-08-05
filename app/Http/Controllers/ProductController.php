<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Exports\ProductExportsCollection;
use App\Exports\ProductExportsView;

use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{

    public function index(){
        return view('products', [
            'products' => Product::paginate()
        ]);
    }

    public function collection(){
        return Excel::download(new ProductExportsCollection, 'products.xlsx');
    }

    public function view(){
        return Excel::download(new ProductExportsView, 'products.xlsx');
        
    }
}
