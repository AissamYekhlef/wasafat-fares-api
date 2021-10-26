<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DishesTable extends Component
{
    private $dishes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dishes)
    {
        $this->dishes = $dishes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dishes-table')->with('dishes', $this->dishes);
    }
}
