<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public string $title;
    public string $body;
    public string $src;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $src, $body)
    {
        $this->title = $title;
        $this->body = $body;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
