<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarList extends Component
{
    public $all_cars;
    
    public  function mount(){
        $this -> all_cars = Car::all();
    }

    public function render()
    {
        return view('livewire.car-list', [
            'cars' => $this -> all_cars
        ]);
    }
}
