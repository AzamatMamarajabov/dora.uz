<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Service;
class Services extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $serviceee = Service::paginate(100);
        return view('components.services',compact('serviceee'));
    }
}
