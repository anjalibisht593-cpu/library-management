<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class RegisterComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $cpassword;

    public function render()
    {
        return view('livewire.register-component');
    }
    public function register(){
        $this->validate([
            "name"=>"required | max:20 |min:2 ",
            "email"=>"email | required | unique:users,email",
            "password"=>"required",
            "cpassword"=>"same:password"
        ]);

        $user= new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

          $this->dispatch("success", message:"Account created successfully");
          return redirect('/home');
          $this->reset("name","email","password","cpassword"); 
    }
   
}
