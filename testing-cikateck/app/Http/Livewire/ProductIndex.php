<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $no = 1;
        $nomor = 1;
        $productProgress = Product::where('status', 'Pending')->get();
        $productFinish = Product::where('status', 'Finish')->get();
        return view('livewire.product-index', compact('productProgress', 'productFinish', 'no', 'nomor'))
            ->extends('layout.app')
            ->section('content');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        session()->flash('message', "Product $product->name was delete");
    }

    public function updateStatus($id)
    {
        $product = Product::find($id);
        if($product->status == "Pending"){
            $product->update([
                'status' => "Finish",
            ]);
            session()->flash('message', "Product $product->name Finish Successfully.");
        }elseif($product->status == "Finish"){
            $product->update([
                'status' => "Pending",
            ]);
            session()->flash('message', "Product $product->name Reload Successfully.");
        }
    }
}
