<?php

namespace App\Livewire\Admin\Blog\Post;

use App\Models\Blog\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $posts = Post::with('user')->paginate(10);
        return view('livewire.admin.blog.post.index', compact('posts'));
    }
}
