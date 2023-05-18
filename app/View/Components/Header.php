<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void 
     * @return $name string 
     * @return $level string
     * @return $icon string
     * @return $alt string
     */

    public $name;
    public $level;
    public $icon;
    public $alt;

    public function __construct($name, $level, $icon, $alt)
    {
        $this->name = $name;
        $this->level = $level;
        $this->icon = $icon;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
