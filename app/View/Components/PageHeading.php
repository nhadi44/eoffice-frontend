<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeading extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * @return $title string
     */

    public $title;
    public $breadcrumbs;

    public function __construct($title, $breadcrumbs)
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-heading');
    }
}
