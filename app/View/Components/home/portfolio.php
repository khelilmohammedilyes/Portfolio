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
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwindcss and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/thecodeholic/laravel-vue-survey'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'E-commerce website with Yii2',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com/thecodeholic/yii2-ecommerce-website'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'REST API with Laravel 8 and Sanctum',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/thecodeholic/laravel-image-manipulation-rest-api'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/thecodeholic/php-mvc-framework'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'YouTube clone with Yii2',
                'image' => url('/img/yii2-youtube-clone.png'),
                'github' => 'https://github.com/thecodeholic/Yii2-Youtube-Clone'
            ],
            [
                'category' => ['Yii2', 'VueJs'],
                'title' => 'Yii2 + VueJs Notes application',
                'image' => url('/img/yii2-vue-notes.png'),
                'github' =>  'https://github.com/thecodeholic/vue.js-yii2-notes'
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
