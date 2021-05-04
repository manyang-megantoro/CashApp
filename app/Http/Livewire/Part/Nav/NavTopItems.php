<?php

namespace App\Http\Livewire\Part\Nav;

use Livewire\Component;

class NavTopItems extends Component
{

    public $navs, $responsive, $default, $full;

    public function mount($navs_extra = [], $responsive = false, $full = true)
    {
        $this->responsive = $responsive;
        $this->full = $full;

        if(!empty($navs_extra)){
            $this->navs = $navs_extra;
            $this->default =false;
        }else{
            $this->default =true;
            $this->navs = [
                [
                    'route' => 'dashboard',
                    'title' => 'Nice'
                ]
            ];
        }

    }

    public function render()
    {
        return view('livewire.part.nav.nav-top-items');
    }
}
