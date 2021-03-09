<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsControllers extends Controller
{
    public function index(){
        $title = "Welcome to laravel course";
        $description = 'Created this';
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // compact method
        // return view('products.index', compact('title', 'description'));

        // with method
        // return view('products.index')->with('data', $data);

        // Directly in the view
        return view('products.index', [
          'data' => $data
        ]);
    }

    public function about() {
        return 'about page';
    }

    public function show($name){
      $data = [
        'iPhone' => 'iPhone',
        'Samsung' => 'Samsung'
    ];

    return view('products.index', [
      'products' => $data[$name] ?? 'product' . $name . ' doesnt exist'
    ]);
    }
}
