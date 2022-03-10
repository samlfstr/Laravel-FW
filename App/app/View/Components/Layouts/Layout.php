<?php

namespace App\View\Components\Layouts;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{

    /**
     * Layout constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @return Application|Htmlable|Factory|View
     */
    public function render()
    {
        return view('components.layout');
    }
}
