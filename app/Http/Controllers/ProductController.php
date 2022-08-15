<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function helloWorld()
    {
        return response('<h1>Hello World</h1>', 404)
            ->header('Content-Type', 'text/plain')
            ->header('bar', 'foo');
    }

    //http://localhost/api/search?name=rob&city=london
    public function search(Request $request)
    {
        dd($request);
//        +query: Symfony\Component\HttpFoundation\InputBag {#50 ▼
//        #parameters: array:2 [▼
//        "name" => "rob"
//      "city" => "london"
//    ]
//  }
        return $request->name . ' ' . $request->city;
    }
}
