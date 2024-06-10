<?php

namespace App\Livewire\Read;

use Livewire\Component;
use App\Models\news;
class Page extends Component
{
    public $news;
    public $selectedNews;
    public function mount()
    {
        $this->news = news::all(); // Mengambil semua data dari tabel news
    }
    public function read($id)
    {
        $this->selectedNews = news::find($id); // Mengambil data berdasarkan id
    }

    public function delete($id)
    {
        news::find($id)->delete();
        $this->news = news::all();
    }

    public function edit($id)
    {
        return redirect()->route('edit', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.read.page');
    }
}
