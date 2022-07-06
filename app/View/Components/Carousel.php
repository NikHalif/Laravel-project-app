<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class Carousel extends Component
{
    public $images;
    public $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($images)
    {
        $this->images = $images;
        $this->count = count($images);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel');
    }
}
