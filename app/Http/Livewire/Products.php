<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Products extends Component
{

	public $row = [];

	public function mount()
	{
		$this->row = [
			['qty' => 1]
		];
	}

	public function addProduct()
	{
		$this->row[] = ['qty' => 1];
	}

	public function removeProduct($index)
	{
		unset($this->row[$index]);
		array_values($this->row);
	}

    public function render()
    {
        return view('livewire.products');
    }
}
