<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JobForm extends Component
{
    public $action;
    public $value;

    /**
     * Create a new component instance.
     *
     * @param $action
     * @param string $value
     */
    public function __construct($action, $value = '')
    {
        $this->action = $action;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.job-form');
    }
}
