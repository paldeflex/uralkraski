<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchForm extends Component
{
    public function __construct(public string $action = '/search', public string $method = 'GET')
    {

    }

    public function render(): View|Closure|string
    {
        return view('components.search-form');
    }
}
