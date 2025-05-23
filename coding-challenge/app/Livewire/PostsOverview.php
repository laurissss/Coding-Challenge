<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostsOverview extends Component
{
    use WithFileUploads;

    public Collection $posts;

    #[Validate('required|unique:posts', message: 'Bitte einen Titel eingeben')]
    public string $title;

    #[Validate('required', message: 'Bitte einen Text eingeben')]
    public string $post_text;

    #[Validate('required', message: 'Bitte ein Bild hochladen')]
    public $image_path;

    public function mount(): void
    {
        $this->posts = Post::latest()->get();
    }

    public function uploadPost(): void
    {
        $this->validate();

        $path = $this->image_path->store('images', 'public');

        Post::create([
            'author_id' => Auth::id(),
            'title' => $this->title,
            'text' => $this->post_text,
            'image_path' => $path,
        ]);

        $this->reset(['title', 'post_text', 'image_path']);

        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.posts-overview');
    }
}
