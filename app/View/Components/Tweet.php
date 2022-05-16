<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tweet extends Component
{
    protected $tweets;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tweets)
    {
        $this->tweets = $tweets;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tweet', ['tweets'=>$this->tweets]);
    }
}
