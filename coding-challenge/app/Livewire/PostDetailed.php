<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostDetailed extends Component
{
    public Post $post;

    public function mount($id): void
    {
        $this->post = Post::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.post-detailed');
    }
}
