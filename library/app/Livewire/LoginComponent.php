<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginComponent extends Component
{
    public $email,$password;
    public function render()
    {
        return view('livewire.login-component');
    }

    public function login(){
     $this->validate([
        "email"=>"required|email",
        "password"=>"required"
     ]);

     $data=[
        "email"=>$this->email,
        "password"=>$this->password
     ];
     if(Auth::attempt($data)){
        $this->dispatch("success", message:"login successfully");
        return $this->redirect('/dashboard');
     }
            $this->dispatch("error", message:"invalid, please fill the correct email or password");
        
    }
}
