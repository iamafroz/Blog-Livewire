<?php

namespace App\Livewire;

use App\Models\post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserPost extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $title;

    #[Validate('required|min:10')]
    public $description;

    #[Validate('image|max:1024')]
    public $image;


    
    public function file_upload()
    {
        $this->validate();
        $filename = $this->image->getClientOriginalName();

        post::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $filename,

        ]);

        $this->image->store('/upload');
    }

    public function render()
    {

        return view('livewire.user-post');
    }
}
