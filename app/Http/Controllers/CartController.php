<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $userId = $request->users()->id;
        $musicId = $request->input('music_id');
        $quantity = $request->input('quantity');

        Cart::create([
            'user_id' => $userId,
            'music_id' => $musicId,
            'quantity' => $quantity
        ]);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function show(Request $request)
    {
        $userId = $request->users()->id;
        $cartItems = Cart::where('user_id', $userId)->get();

        return view('cart.show', ['cartItems' => $cartItems]);
    }

    public function delete(Request $request, $cartId)
    {
        Cart::find($cartId)->delete();

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }

    public function updateCartItem(Request $request, $cartId)
    {
        $quantity = $request->input('quantity');

        Cart::where('id', $cartId)->update(['quantity' => $quantity]);

        return redirect()->back()->with('success', 'Số lượng sản phẩm đã được cập nhật');
    }

    public function checkout(Request $request)
    {
        // Xử lý thanh toán và đặt hàng tại đây

        return redirect()->back()->with('success', 'Đặt hàng thành công');
    }
}

