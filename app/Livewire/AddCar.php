<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class AddCar extends Component
{
    public $car_name='';
    public $brand='';
    public $capacity='';
    public $fuel_type='';
    public function saveCar(){
        $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'capacity' => 'required',
            'fuel_type' => 'required',
        ]);

        // since validation works fine
        // now add to database
        try {
            $new_car = new Car;
            $new_car->car_name = $this->car_name;
            $new_car->brand = $this->brand;
            $new_car->engine_capacity = $this->capacity;
            $new_car->fuel_type = $this->fuel_type;
            $new_car->save();

            return $this->redirect('/Cars',navigate:true); 
            // add the last parameter it's important for not reloading the whole page..
            // and give us the way to achieve the SPA..
        } catch (\Exception $e) {
            dd($e) ;
        }

        // now try to add car..
    }

    public function render()
    {
        return view('livewire.add-car');
    }
}
