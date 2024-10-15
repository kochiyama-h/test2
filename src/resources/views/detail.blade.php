@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css')}}">
@endsection



@section('content')



<p>商品一覧＞{{ $product->name }}</p>

<div class="detail">


<div class="detail__contents">


  <div class="detail__contents__image">    
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
    <input type="file" name="" value="">
  </div>
  
  <div class="detail__contents__info">
  
    <div class="detail__contents__info__category">
      <label for="">商品名</label>
      <input type="text" name="" value="{{ $product->name }}">
    </div>
  
    <div class="detail__contents__info__category">
      <label for="">価格</label>
      <input type="text" name="" value="{{ $product->price }}">
    </div>
  
    <div class="detail__contents__info__category">
    <label for="">季節</label>
    <div class="seasons-container">
        @foreach(['春', '夏', '秋', '冬'] as $season)
            <div class="season-item">
                <input type="checkbox" name="seasons[]" value="{{ $season }}" 
                    @if($product->seasons->contains('name', $season)) checked @endif>
                <label>{{ $season }}</label>
            </div>
        @endforeach
    </div>
</div>
  </div>

</div>



  <div class="detail__contents__info__category ">
    <label for="">商品説明</label>  
    <textarea id="" name="" rows="10" cols="50">{{ $product->description }}</textarea>
  </div>
  
</div>

<form action="{{ route('products.index') }}" method="get">
    <input type="submit" value="戻る" class="button">
</form>

<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('POST') 
    <input type="submit" value="変更を保存する" class="button">
</form>




@endsection