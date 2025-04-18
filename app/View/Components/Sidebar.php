<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * The active menu item.
     *
     * @var string
     */
    public $activeItem;

    /**
     * Create a new component instance.
     *
     * @param  string  $activeItem
     * @return void
     */
    public function __construct($activeItem = '')
    {
        $this->activeItem = $activeItem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}