<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard-component');
    }

    public function addbook(){
        return $this->redirect('/bookshop');
    }

    public function viewbook(){
        return $this->redirect('/viewshop');
    }
}
