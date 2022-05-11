<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwindcss', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwindcss and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/CodeWithPranta/laravel-vue-survey'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'Multi-vendor E-commerce website with Laravel9 and Bootstrap5',
                'image' => url('/img/admin_bt5.png'),
                'github' => '#contact'
            ],
            [
                'category' => ['PHP', 'WordPress'],
                'title' => 'Service Project Using WordPress and Custom Plugin- Texas, USA',
                'image' => url('/img/householddiamonds.png'),
                'github' => 'https://householddiamonds.com/'
            ],
            [
                'category' => ['Tailwindcss'],
                'title' => 'Simple Responsive E-commerce Template',
                'image' => url('/img/tailwindcss_template.png'),
                'github' => 'https://github.com/CodeWithPranta/ecommerce-tailwind'
            ],
            [
                'category' => ['CI4', 'Bootstrap'],
                'title' => 'Progressive Web App on Home Food Selling- Rennes, France',
                'image' => url('/img/homestaurants.png'),
                'github' => 'https://homestaurants.com/'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP Project with Maintaining MVC- Rennes, France',
                'image' => url('/img/communitymars.png'),
                'github' =>  'https://communitymars.com/'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
