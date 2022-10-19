<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg" alt="{{ $item->name }}">
        <div class="caption">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->price }}</p>
            {{ $item->category->name }}
            <p>
            <form action="{{ route('basket-add', $item) }}" method="POST">
                <button type="submit" class="btn btn-primary">В корзину</button>

                <a href="{{ route('product', [$item->category->code, $item->code]) }}" class="btn btn-default"
                    role="button">Подробнее</a>
                </p>
                @csrf
            </form>
            
        </div>
    </div>
</div>
