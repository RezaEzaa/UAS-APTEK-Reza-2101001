<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\news;

class Page extends Component
{
    public $judul;
    public $kutipan;
    public $deskripsi;
    public function render()
    {
        return view('livewire.create.page');
    }

    public function save(){
        news::create([
            'judul' => $this->judul,
            'kutipan' => $this->kutipan,
            'deskripsi' => $this->deskripsi,
        ]);
        $this->judul = null;
        $this->kutipan = null;
        $this->deskripsi = null;
    }
}
