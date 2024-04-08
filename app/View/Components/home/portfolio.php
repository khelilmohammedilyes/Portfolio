<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;
use function url;
use function view;

class portfolio extends Component
{

    public array $items = [];
    public array $tabs = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel'],
                'title' => 'Web environment to post and find Laravel projects (gigs).',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/khelilmohammedilyes/laraGigs'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Instagram clone',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com/khelilmohammedilyes/laraGram'
            ],
            [
                'category' => ['JavaScript'],
                'title' => 'Chrome Extension that can be used to save the current tab or a customer input.',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/khelilmohammedilyes/ChromeExtension'
            ],
            [
                'category' => ['JavaScript'],
                'title' => 'Simple representation of blackjack game',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/khelilmohammedilyes/BlackJack-Game'
            ],
            [
                'category' => ['CSS'],
                'title' => 'Simple app that can be used to count a stations passengers.',
                'image' => url('/img/yii2-youtube-clone.png'),
                'github' => 'https://github.com/khelilmohammedilyes/Passenger-Counter-App'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
