<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts;
    public $postId,$title,$description;
    public $isOpen = 0;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    public function showModal() {
        $this->isOpen = true;
    }
    public function hideModal() {
        $this->isOpen = false;
    }
    public function store() {
        $this->validate(
            [
                'title' => 'required'
                'description' => 'required'
            ]
            );

        post::updateOrCreate(['id' => $this->postId], [
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->hideModal();

        $this->postId = '';
        $this->title = '';
        $this->description = '';
    }
}
