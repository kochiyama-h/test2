<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;

class ProductController extends Controller
{

    //  商品一覧画面
    public function index()
    {
        $products = Product::paginate(6);
        return view ('products',['products' => $products]);
    }



     // 商品詳細画面
    public function show($id) {
        
        $product = Product::findOrFail($id);  
        return view('detail', compact('product'));
    }


    //更新
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);    
            
        
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        
        // 季節の更新
        //現在の季節を削除してから新しい季節を保存するなど
        $product->seasons()->sync($request->input('seasons', [])); 
    
        $product->save(); 
    
        return redirect()->route('products.index')->with('success', '商品情報が更新されました。'); 
    }
    

}
