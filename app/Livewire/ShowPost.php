<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\post;
// use Livewire\Attributes\Validate;

class ShowPost extends Component
{
//    #[Validate('required|min:3')]
    public $search_title ='';

//     // public $search_result1 ;

//     public function serach_validate(){
//         $this->validate();

//         // $this->search_result1 =  post::search($this->search_title)->get() ;
//     }
    public function render()
    {   
        // dd(post::search($this->search_title)->get());

        return view('livewire.show-post' , 
        ['search_result' => post::search($this->search_title)->get() ]
    );
    }
}
