@if (count($cartItems) > 0)
    <h3>Danh sách sản phẩm trong giỏ hàng:</h3>
    <ul>
        @foreach ($cartItems as $item)
            <li>{{ $item->music->name }} - {{ $item->music->price }}</li>
        @endforeach
    </ul>
@else
    <p>Giỏ hàng của bạn đang trống.</p>
@endif