@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="container">
    <h1 class="product-title">{{ $product->name }}</h1>
    <img src="{{ asset($product->image) }}" alt="商品画像" class="product-image">
    
    <!-- 商品情報の更新フォーム -->
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product-name">商品名</label>
            <input type="text" id="product-name" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">価格</label>
            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>季節</label>
            <div class="season-options">
                @foreach($seasons as $season)
                    <label>
                        <input type="checkbox" name="seasons[]" value="{{ $season->name }}" 
                        {{ $product->seasons->contains($season) ? 'checked' : '' }}> 
                        {{ $season->name }}
                    </label>
                @endforeach
            </div>
            @error('seasons')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">商品説明</label>
            <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-buttons">
            <a href="{{ route('products.index') }}" class="back-button">戻る</a>
            <button type="submit" class="save-button">変更を保存</button>
        </div>
    </form>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-button">
            <i class="fas fa-trash-alt"></i> 削除
        </button>
    </form>
</div>
@endsection