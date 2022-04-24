<?php


namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCatagoryComponent extends Component
{
    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-catagory-component',['categories'=>$categories])->layout('layouts.base');
    }
}
