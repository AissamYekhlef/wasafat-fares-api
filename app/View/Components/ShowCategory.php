<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowCategory extends Component
{
    private $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-category')->with('category', $this->category);
    }
}
