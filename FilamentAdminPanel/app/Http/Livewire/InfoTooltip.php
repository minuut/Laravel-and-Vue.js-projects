<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InfoTooltip extends Component
{
    public $content;

    public static function make()
    {
        return new static();
    }

    public function content($content)
    {
        $this->content = $content;

        return $this;
    }


    public function render()
    {
        return view('livewire.info-tooltip');
    }
}
