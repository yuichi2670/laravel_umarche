<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $classBaseMessage;
    public $defaultMessage;

    public function __construct($classBaseMessage, $defaultMessage="初期値です。")
    {
        $this->classBaseMessage = $classBaseMessage;
        $this->defaultMessage = $defaultMessage;
    }

    public function render()
    {
        return view('components.tests.test-class-base-component');
    }
}
