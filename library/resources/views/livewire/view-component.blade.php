<div>
    
    <div class="book-container">
        <!-- start navbar -->
        <nav class="navbar">
            <div>
               <i class="bi bi-book-fill book-icon"></i>
                <span class="book-contant"> 
                   Library Books
               </span>
            </div>

            <div class="search-container mx-3">
                <input type="search"
                wire:model.live="search"
                class="search-box" placeholder="Search item">
                <i class="bi bi-search-heart search-icon"></i>
            </div>

           <div class="addbook">
             +Add Book
           </div>
       </nav>
        <!-- navbar end -->
    <table class="book-table">
       
        <thead>
           <tr>
              <th>image</th>
              <th>Tittle</th>
              <th>Author</th>
              <th>Actions</th>
          </tr>
       </thead>

       <tbody>
         @foreach($books as $book)
         <tr>
            <td>
                <img src="{{ asset('storage/'. $book->image) }}" width="150" height="180" alt="Books" class="book-image">
            </td>
            <td class="book-tittle">{{$book->tittle}}</td>
            <td class="book-author">{{$book->author}}</td>
            <td class="">
                <button type="buttom" class="mx-5">
                    <i class="bi bi-pen">Edit</i></button>
                  <button>
                     <i class="bi bi-trash3">Delete</i>
                  </button>
            </td>
            
         </tr>
       </tbody>
       @endforeach
    </table>

    </div>
</div>
