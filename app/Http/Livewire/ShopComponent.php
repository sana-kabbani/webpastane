<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,$product_price)->associate('App\Models\Product');
        session()->flash('success','added');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
       

        $product = Product::paginate(12);
        return view('livewire.shop-component',['products'=>$product])->layout('layouts.base');
    }
}
