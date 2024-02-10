<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;
use App\Models\roles;


class Register extends Component
{   
    #[Validate('required')]
    public $name ;
    
    #[Validate('required|email')]
    public $email ;
    
    #[Validate('required|min:3')]
    public $password ;

    public $role ;
    
    public function save(){
        $this->validate(); 
        
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => $this->password,
            'email_verified_at' => now(),
            'roles' => $this->role,
        ]); 
        
        session()->put(['name'=>$this->name,
        'email'=>User::where('email',$this->email)->first(),
    ]);
    
    }
    public function render()
    {
        return view('livewire.register',[
            'roles'=>roles::all(),
        ]);
    }
}
