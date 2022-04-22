<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;


class Tab extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.tab', compact('categories'));
    }
}
