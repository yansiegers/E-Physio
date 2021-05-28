<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * The list of options.
     *
     * @var array
     */
    public $list;

    /**
     * The selected value of the list.
     *
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     * @param array $list
     * @param string $value
     * @return void
     */
    public function __construct($list, $value)
    {
        $this->list = $list;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
