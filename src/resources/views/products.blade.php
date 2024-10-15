@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('content')
<div class="products">
  <div class="products__heading">
    <h2 >商品一覧</h2>
    <button class="add_button">+ 商品を追加</button>
  </div>

  <div class="products__content">


    <div class="products__content__search">
      <input class="search_text" type="text" placeholder="商品名で検索">
      <button class="search_button">検索</button>  
    </div> 

    <div class="products__content__list">
      <div class="products__content__list__box">
        <img src="" alt="kiwi" class="products__content__list__image">
        <div class="products__content__list__info">
            <h3>キウイ</h3>
            <p>800</p>
        </div> 
      </div>

      <div class="products__content__list__box">
        <img src="" alt="kiwi" class="products__content__list__image">
        <div class="products__content__list__info">
            <h3>キウイ</h3>
            <p>800</p>
        </div> 
      </div>




    </div>


  </div>





</div>





@endsection

