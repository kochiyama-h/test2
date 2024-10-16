@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('content')
<div class="products">
  <div class="products__heading">  
    <h2 >商品一覧</h2>
    <form action="{{ route('products.register') }}" method="get">
     
      <input class="add_button" type="submit" value="+ 商品を追加">
    <!-- <button class="add_button">+ 商品を追加</button> -->
    </form>
    
  </div>

  <div class="products__content">


    <div class="products__content__search">
      <input class="search_text" type="text" placeholder="商品名で検索">
      <button class="search_button">検索</button>  
    </div> 

    <div class="products__content__list">
    @foreach ($products as $product)
        <a href="{{ url('/products/' . $product->id) }}" class="products__content__list__box">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{$product->name}}" class="products__content__list__image">
            <div class="products__content__list__info">        
                <h3>{{$product->name}}</h3>
                <p>￥{{$product->price}}</p>
            </div> 
        </a>
    @endforeach
</div>



</div>  
<!-- ページネーションのリンク -->
<div class="pagination">
    {{ $products->links() }}
</div>

</div>

@endsection

