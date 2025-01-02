<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPosts extends Component
{
    public array $chunks = [];
    public $page = 1;

    public function mount()
    {
        $this->chunks = Post::latest()->pluck('id')->chunk(10)->toArray();
    }

    public function hasMorePages()
    {
        return $this->page < count($this->chunks);
    }

    public function loadMore()
    {
        //cek dia tak lebih dari chunks yg ditetapkan iaitu declare kat atas tu 10
        if(! $this->hasMorePages()) {
            return;
        }

        $this->page++;
    }

    public function render()
    {
        // dd($this->chunks);
        return view('livewire.list-posts');
    }
}
