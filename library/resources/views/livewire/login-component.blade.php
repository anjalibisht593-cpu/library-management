<div>
    <form wire:submit="login">
        <p>
            <label for="email">Email Id</label>
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
            <button type="submit">Login</button>
        </p>
    </form>
     @script
    <script>
        $wire.on("error", function(res){
            swal.fire({
                title:"error",
                text:res.message,
                icon:"error"
            });
        });
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
