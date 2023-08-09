<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class HomeComponent extends Component
{
    public $data = [];
    public $title = 'Home';

    public function mount()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        if ($response->successful()) {
            $data = $response->json();
            return $this->data = $data;
        }
    }

    public function sortData()
    {
        usort($this->data, function ($a, $b) {
            return strcmp($a['title'], $b['title']);
        });
    }

    public function render()
    {
        return view(
            'livewire.home-component',
            [
                'data' => $this->data
            ]
        )
            ->layout('layouts.mainLayout')
            ->layoutData(['title' => $this->title])
            ->slot('main');
    }
}
