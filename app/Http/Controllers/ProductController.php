<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Talette OnePlus Pad Go',
                'price' => 5400,
                'img' => 'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/OnePlus-pad-go-header.jpg'
            ],
            [
                'name' => 'Phone OnePlus Nord 3',
                'price' => 4500,
                'img' => 'https://storage.micromagma.ma/micromagma/78e6ada354f201704996ae31cbb3151f.jpg'
            ],
            [
                'name' => 'TV TCL 32 inch',
                'price' => 1600,
                'img' => 'https://www.lcd-compare.com/images/pdts/xl/TCL32S5400AF.jpg'
            ]
        ];

        return view('Products', compact('products'));
    }
}
