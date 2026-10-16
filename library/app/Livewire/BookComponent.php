<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Book;


class BookComponent extends Component
{
    use WithFileUploads;
    public $tittle,$author,$price,$sale_price,$image,$qty,$category;
    public function render()
    {
        return view('livewire.book-component');
    }
    public function create_book(){
        $this->validate([
            "category"=>"required",
            "tittle"=> "required|min:2",
            "author"=> "required|min:5",
            "price"=> "required",
            "sale_price"=>"required",
            "image"=>"required|image",
            "qty"=>"required",
        ]);

        $book = new Book;
        $book->category = $this->category;
        $book->tittle = $this->tittle;
        $book->author = $this->author;
        $book->price = $this->price;
        $book->sale_price = $this->sale_price;
        $book->qty = $this->qty;

        $url = $this->image->storePublicly('books','public');
        $book->image = $url;
        $book->save();

          $this->dispatch("success", message:"Add book successfully");
          $this->reset("category","tittle","author","price","sale_price","image","qty");    


    }
}
