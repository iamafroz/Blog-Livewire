<?php

namespace App\Livewire;

use App\Models\category;
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

    #[Validate('required')]
    public $category;
    
    public function file_upload()
    {
        // dd($this->category);
        // exit;


        $this->validate();
        $filename = $this->image->getClientOriginalName();

        post::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $filename,       
            'category_id'=> $this->category,
            'user_id' => session()->get('user_id'),

        ]);

        if($this->image){

            $this->image->storeAs('public/upload',$filename);
        }
    // $this->reset(['name', 'email', 'password', 'selected_role']);

    }

    public function render()
    {
        return view('livewire.user-post',[
            'categories' => category::all()
        ]
    );
    }

    // public function render()
    // {
    //     // Retrieve categories
    //     $categories = category::all();
    //     // exit;
        
    //     // Check if categories are not null
    //     if ($categories) {
    //         // dd($categories);
    //         // exit;
    //         // dump($)
    //         // Pass categories to the view
    //         return view('livewire.user-post', ['categories' => $categories]);
    //     }
    
    //     // If categories are null, handle appropriately (e.g., return an empty array)
    //     return view('livewire.user-post', ['category' => []]);
    // }
}
