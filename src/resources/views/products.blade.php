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
    
    </form>
    
  </div>

 

  <div class="products__content">


  <div class="products__content__search">
        <form action="{{ route('products.search') }}" method="GET"> 
            <input class="search_text" type="text" name="name" placeholder="商品名で検索"> 
            <button class="search_button" type="submit">検索</button>  
        </form>


        <form action="{{ route('products.index') }}" method="GET" class="sort__button">
    <select name="sort" onchange="this.form.submit()">
        <option value="" disabled selected>並び替えを選択</option> 
        <option value="high_to_low">高い順に表示</option>
        <option value="low_to_high">低い順に表示</option>    
    </select>
</form>

      @if(request('sort'))
        <div class="sort-tag">
            
            <span>{{ request('sort') === 'high_to_low' ? '高い順に表示' : '低い順に表示' }}</span>
            <form action="{{ route('products.index') }}" method="GET" style="display: inline;">
            <button type="submit">×</button>
            <input type="hidden" name="sort" value=""> <!-- sortを空にする -->
            </form>
        </div>
        @endif

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

