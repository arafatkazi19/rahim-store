<?php

namespace RahimStore\Http\Controllers;

use Illuminate\Http\Request;
use RahimStore\Product;
use Input;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function addProduct(){
        return view('users.product.add-product');
    }

    public function saveProduct(Request $request){
        $this->validate($request,[
            'product_name' => 'required|min:4',
            'product_price' => 'required|integer',
            'expiry_date' => 'required|date',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->expiry_date = $request->expiry_date;
        $product->save();

        return redirect('/add-product')->with('message','Product Added Successfully');
    }

    public function manageProduct(){
        $products = Product::all();

        return view('users.product.manage-product',['products'=>$products]);
    }

    public function editProduct($id){
        $product = Product::find($id);
        return view('users.product.edit-product',['product'=>$product]);
    }

    public function updateProduct(Request $request){
            $product = Product::find($request->id);
            $product->product_name = $request->product_name;
            $product->product_price = $request->product_price;
            $product->expiry_date = $request->expiry_date;
            $product->save();

            return redirect('/manage-product')->with('message','Product Updated Successfully');

    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/manage-product')->with('message','Product Deleted Successfully');
    }

    public function filteredPrice(Request $request){

        $this->validate($request,[
            'min_price' => 'required',
            'max_price' => 'required',
        ]);

        $min_price = $request->query('min_price');
        $max_price = $request->query('max_price');

        if (!empty($min_price) && !empty($max_price)){
            $fproducts = Product::all()->whereBetween('product_price', [$min_price, $max_price]);
        }


        return view('users.product.filtered-product',['fproducts'=>$fproducts]);
    }

    public function filteredDate(Request $request){

        $this->validate($request,[
            'to' => 'required',
            'from' => 'required',
        ]);

        $to = $request->query('to');
        $from = $request->query('from');

        if (!empty($to) && !empty($from)){
            $dproducts = Product::all()->whereBetween('expiry_date', [$to, $from]);
        }

        return view('users.product.filtered-dproduct',['dproducts'=>$dproducts]);
    }
}
