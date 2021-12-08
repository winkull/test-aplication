<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $name, $unit, $price, $amount;

    public function render()
    {
        return view('livewire.product-create')
            ->extends('layout.app')
            ->section('content');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'unit' => 'required',
            'price'=> 'required|numeric',
            'amount'  => 'required|numeric',            
        ]);
        $product      = Product::create([
            'name' => $this->name,
            'unit' => $this->unit,
            'price'=> $this->price,
            'qty'  => $this->amount,
            'status' => 'Pending',
        ]);
        $this->resetForm();      
        session()->flash('message', 'Product '.$product['name'].' was stored !');
    }

    private function resetForm()
    {
        $this->name = null;
        $this->unit = null;
        $this->price = null;
        $this->amount = null;
    }
}
