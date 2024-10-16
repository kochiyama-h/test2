@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>商品登録</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="name">商品名 <span class="text-danger required">必須</span></label>
            <input type="text" id="name" name="name" placeholder="商品名を入力" value="{{ old('name') }}">
            @error('name')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="price">価格 <span class="text-danger required">必須</span></label>
            <input type="number" id="price" name="price" placeholder="価格を入力" value="{{ old('price') }}">
            @error('price')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="image">商品画像 <span class="text-danger required">必須</span></label>
            <input type="file" id="image" name="image" accept="image/*">
            @error('image')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label>季節 <span class="text-danger required">必須</span> <span class="text-danger optional">複数選択可</span></label>
            <div class="seasons">
                <label><input type="checkbox" name="seasons[]" value="春" {{ in_array('春', old('seasons', [])) ? 'checked' : '' }}> 春</label>
                <label><input type="checkbox" name="seasons[]" value="夏" {{ in_array('夏', old('seasons', [])) ? 'checked' : '' }}> 夏</label>
                <label><input type="checkbox" name="seasons[]" value="秋" {{ in_array('秋', old('seasons', [])) ? 'checked' : '' }}> 秋</label>
                <label><input type="checkbox" name="seasons[]" value="冬" {{ in_array('冬', old('seasons', [])) ? 'checked' : '' }}> 冬</label>
            </div>
            @error('seasons')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">商品説明 <span class="text-danger required">必須</span></label>
            <textarea id="description" name="description" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
            @error('description')
                <div class="form__error text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <a href="{{ url()->previous() }}" class="btn-secondary">戻る</a>
            <button type="submit">登録</button>
        </div>
    </form>
</div>
@endsection