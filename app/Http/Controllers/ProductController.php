<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Products.product', compact('products'));
    }

    public function save(Request $request)
    {
       dd($request->done);
         $productName = $request['product_name'];
         $title = $request['title'];
         $description = $request['description'];
         $category = $request['category'];
         $price = $request['price'];

         $productData = Product::create([
            'name' => $productName,
            'title' => $title,
            'description' => $description,
            'category' => $category,
            'price' => $price
         ]);

         return redirect()->route('product.show')->with('message', 'Product Created Successfully');
    }

    public function show()
    {
        $products = Product::all();
        return view('Products.product-list', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('Products.product-edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $updateProduct =Product::find($id);

        $productName = $request['product_name'];
        $title = $request['title'];
        $description = $request['description'];
        $category = $request['category'];
        $price = $request['price'];

        $updateProduct->update([
            'name' => $productName,
            'title' => $title,
            'description' => $description,
            'category' => $category,
            'price' => $price
        ]);

        return redirect()->route('product.show')->with('message', 'Product Updated Successfully');
    }

    public function delete($id)
    {
        $productId = Product::find($id);
        $productId->delete();

        return back()->with('message', 'Product Deleted Successfully');
    }
}
