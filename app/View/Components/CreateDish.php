<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CreateDish extends Component
{
    private $categories;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.create-dish')->with('categories', $this->categories);
    }
}
