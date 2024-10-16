<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\RegisterRequest;

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
    public function update(ProductRequest $request, $id) { 
        $product = Product::findOrFail($id);    
    
        // 画像のアップロード処理
        if ($request->hasFile('image')) {
            // 既存の画像を削除する処理を追加することもできます
            $path = $request->file('image')->store('images','public'); // 適切なストレージパスを指定
    
            $product->image = $path; // 新しい画像のパスを保存
        }
    
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
    
        // 季節の更新
        $product->seasons()->sync($request->input('seasons', [])); 
        $product->save(); 
    
        return redirect()->route('products.show', $product->id)->with('success', '商品情報が更新されました。'); 
    }

    
    //商品登録画面
    public function create()
    {        
        return view('register');    
    }

    // 商品登録処理
    public function store(RegisterRequest $request)
{
    // 商品画像の保存処理
    $imagePath = $request->file('image')->store('products', 'public');

    // productsテーブルに商品データを保存
    $product = Product::create([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'image' => $imagePath,
        'description' => $request->input('description'),
    ]);

    // 季節名からIDを取得して中間テーブルに保存
    $seasonIds = Season::whereIn('name', $request->input('seasons', []))->pluck('id');
    
    // 中間テーブルに季節情報を保存
    $product->seasons()->sync($seasonIds);

    // 商品一覧ページにリダイレクト
    return redirect()->route('products.index')->with('success', '商品が登録されました');
}
}
