<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'dZABLXpN3Lk',
                'title' => 'Responsive Design in Tailwindcss',
                'description' => 'This is a simple e-commerce template design by using tailwindcss3. You can download from my github and practice. Learn with real life projects is always the best thing in programming world.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
