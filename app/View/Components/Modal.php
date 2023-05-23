<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * @return $modalId String
     * @return $modalHeaderBackground String
     * @return $modalTitleColor String
     * @return $modalSize String
     */

    public $modalId;
    public $modalHeaderBackground;
    public $modalTitleColor;
    public $modalSize;

    public function __construct($modalId, $modalHeaderBackground, $modalTitleColor, $modalSize)
    {
        $this->modalId = $modalId;
        $this->modalHeaderBackground = $modalHeaderBackground;
        $this->modalTitleColor = $modalTitleColor;
        $this->modalSize = $modalSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
