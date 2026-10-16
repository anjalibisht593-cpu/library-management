<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;



class ViewComponent extends Component
{
    public function render()
    {
        $books = Book::all();
        return view('livewire.view-component',["books"=>$books]);
    
    }
}
