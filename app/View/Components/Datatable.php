<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datatable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * @return tableHeading array
     */

    public $tableHeading;

    public function __construct($tableHeading)
    {
        $this->tableHeading = $tableHeading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datatable');
    }
}
