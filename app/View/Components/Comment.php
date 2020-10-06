<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Comment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $text;
    public $author;
    public function __construct($text, $author)
    {
        $this->text = $text;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
