<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formInput extends Component
{
    public $id;
    public $name;
    public $value;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param $value
     * @param string $id
     */
    public function __construct($name, $value, $id = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form-input');
    }
}
