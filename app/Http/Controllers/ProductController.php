<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')
        // ->select('name', 'price')
        // ->orderByDesc('id')
        // ->where('id', 1)
        // ->limit(1)
        // ->get();

        $products = Product::paginate(10);

        return view('index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'status' => $request->status,
        ];

        // DB::table('products')->insert($data);


        // Product::create($data);

        // return $data;

        Product::create($data);

        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'status' => $request->status,
        ];

        // DB::table('products')
        //     ->where('id', $id)
        //     ->update($data);

        $product->update($data);

        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // DB::table('products')
        //     ->where('id', $id)
        //     ->delete();

        $product->delete();

        return redirect('/products');
    }
}
