<form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="detail__contents__image">    
        <img id="current-image" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 300px; max-height: 300px;">
        <input type="file" name="image" required>
        @if ($errors->has('image'))
            <div class="error-message">
                {{ $errors->first('image') }}
            </div>
        @endif
    </div>

    <div class="detail__contents__info__category">
        <label for="">商品名</label>
        <input type="text" name="name" value="{{ $product->name }}">
    </div>

    <div class="detail__contents__info__category">
        <label for="">価格</label>
        <input type="text" name="price" value="{{ $product->price }}">
    </div>

    <div class="detail__contents__info__category">
        <label for="">商品説明</label>  
        <textarea name="description" rows="10" cols="50">{{ old('description', $product->description) }}</textarea>
    </div>

    <input type="submit" value="変更を保存する" class="button">
</form>