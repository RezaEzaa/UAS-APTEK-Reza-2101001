<?php

namespace App\Livewire\Edit;

use Livewire\Component;

class Idx extends Component
{
    public $newsId;
    public function render()
    {
        return view('livewire.edit.idx');
    }

    public function mount($id){
        $this->newsId = $id;
    }
}
