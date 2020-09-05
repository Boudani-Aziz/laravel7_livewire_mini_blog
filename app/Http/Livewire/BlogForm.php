<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Blog;
  
class BlogForm extends Component
{
    public $title;
    public $body;
  
    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:6',
            'body' => 'required',
        ]);
  
        Blog::create($validatedData);
  
        return redirect()->to('/form');
    }
  
    public function render()
    {
        return view('livewire.blog-form');
    }
}