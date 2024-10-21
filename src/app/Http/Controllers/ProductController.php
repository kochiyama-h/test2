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

    public function index(Request $request){
    $sort = $request->input('sort');    
    $products = Product::when($sort === 'high_to_low', function($query) {
            return $query->orderBy('price', 'desc');
        })
        ->when($sort === 'low_to_high', function($query) {
            return $query->orderBy('price', 'asc');
        })
        ->paginate(6);

    // ページネーションに現在のクエリパラメータを追加
    $products->appends(['sort' => $sort]);
    return view('products', ['products' => $products]);
}





    public function search(Request $request)
    {
        $search = $request->input('name'); // 'name' を取得する
        $products = Product::when($search, function($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->paginate(6);
        
        return view('search', compact('products'));
    }



     // 商品詳細画面
     public function show($id)
     {
         $product = Product::with('seasons')->findOrFail($id); // 製品と関連する季節を取得
         $seasons = Season::all(); // すべての季節を取得
     
         return view('detail', compact('product', 'seasons')); // ビューに製品と季節を渡す
     }



     //更新

     

     public function update(ProductRequest $request, $id) { 
        
        $product = Product::findOrFail($id);    
        
        //画像のアップロード処理
        if ($request->hasFile('image')) {            
            $file = $request->file('image');       
            $originalFileName = $file->getClientOriginalName();        
            $path = $file->storeAs('images', $originalFileName, 'public');        
            $product->image = $path;
        }

        
    
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        // 商品の保存
        $product->save();
    
        // 選択された季節のIDを直接取得
        $seasonIds = $request->input('seasons', []);

        
        // 中間テーブルに季節情報を保存
        $product->seasons()->sync($seasonIds);
    
        
    
        return redirect()->route('products.index');
    }




    //商品登録画面
    public function create()
    {        
        return view('register');    
    }

    // 商品登録処理
    public function store(RegisterRequest $request)
{
    
    $imagePath = $request->file('image')->store('products', 'public');

    $product = Product::create([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'image' => $imagePath,
        'description' => $request->input('description'),
    ]);

    
    $seasonIds = Season::whereIn('name', $request->input('seasons', []))->pluck('id');
    $product->seasons()->sync($seasonIds);

    return redirect()->route('products.index');
}

    //削除機能
    public function destroy($id) {
        $product = Product::findOrFail($id);        
        
        $product->seasons()->detach();      
        $product->delete(); 
        return redirect()->route('products.index'); 
    }
}
