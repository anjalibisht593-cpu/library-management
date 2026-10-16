<div class="container">
    <form class="form-design" wire:submit="register ">
        <p>
            <label for="name">Name</label>
            <input type="text" wire:model="name">
             @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </p>
        <p>
            <label for="email">Email id</label>
            <input type="text" wire:model="email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </p>
        <p>
            <label for="password">Password</label>
            <input type="text" wire:model="password">
             @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </p>
        <p>
            <label for="cpassword">Confirm Password</label>
            <input type="text" wire:model="cpassword">
             @error('cpassword')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </p>
        <p>
            <button type="submit">Register</button>
            <button>
              <a href="/login">login</a>
            </button>        
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
