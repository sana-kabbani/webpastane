<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);

    }
    public function soreCategory()
    {
        $category=new Category();
        $category->name = $this->name;
        $category->slug =$this->slug;
        $category->save();
        session()->flash('message','kategori üretilmesi başarılı');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}