<?php

namespace App\Livewire\Edit;

use Livewire\Component;
use App\Models\news;

class Page extends Component
{
    public $judul;
    public $kutipan;
    public $deskripsi;
    public $newsId;
    public function render()
    {
        return view('livewire.edit.page');
    }

    public function mount($newsId){

        $news = news::find($newsId);
        $this->judul = $news->judul;
        $this->kutipan = $news->kutipan;
        $this->deskripsi = $news->deskripsi;
    }

    public function update(){
        news::find($this->newsId)->update([
            'judul' => $this->judul,
            'kutipan' => $this->kutipan,
            'deskripsi' => $this->deskripsi,
        ]);
    }
}
