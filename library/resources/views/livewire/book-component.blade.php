<div class="container">
    <form wire:submit="create_book" class="form-design book-form">

       <p>
           <label for="category">Category</label>
           <input type="text" wire:model="category">
           @error('category')
           <span class="text-danger">{{$message}}</span>
           @enderror
       </p>
        <p>
            <label for="tittle">Tittle</label>
            <input type="text" wire:model="tittle">
            @error('tittle')
           <span class="text-danger">{{$message}}</span>
           @enderror
        </p>
        <p>
            <label for="author">Author</label>
            <input type="text" wire:model="author">
            @error('author')
           <span class="text-danger">{{$message}}</span>
           @enderror
        </p>
        <p>
            <label for="price">price</label>
            <input type="text" wire:model="price">
            @error('price')
           <span class="text-danger">{{$message}}</span>
           @enderror
        </p>
        <p>
            <label for="sale_price">sale price</label>
            <input type="text" wire:model="sale_price">
            @error('sale_price')
           <span class="text-danger">{{$message}}</span>
           @enderror
        </p>
        <p>
            <label for="image">book image</label>
            <input type="file" wire:model="image">
            @error('image')
           <span class="text-danger">{{$message}}</span>
           @enderror
        </p>
        <p>
            <label for="qty">qty</label>
            <input type="text" wire:model="qty">
            @error('qty')
           <span class="text-danger">{{$message}}</span>
           @enderror
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>

        @script
    <script>
         $wire.on("success", function(res){
            
            swal.fire({
                title:"success",
                text:res.message,
                icon:"success"
            });
        });
        
    </script>
    @endscript
</div>
