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

    #[Validate('required|exists:roles,id')]
    public $selected_role ;

    // public $role ;

    // public function mount(){
    //     $this->role = roles::with('users')->get();
    // }

    public function Save(){
        // dd($this->selected_role);
        // exit;
    //     dd(roles::with('users')->get());
    // exit;
    // dd(User::with('role')->get());
    // exit;
        
        $this->validate(); 

        
      User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            // 'roles' => role()->associate($this->role),
            'role_id' => $this->selected_role,
        ]); 

        // $user->role()->associate($this->role); 

        // $user->save();


    $this->reset(['name', 'email', 'password', 'selected_role']);

    
    }
    public function render()
    {
        return view('livewire.register',[
            // 'roles'=>User::with('role')->get(),
            // 'roles' => roles::all(),
            'role' =>  roles::with('users')->get(),
        ]);
    }
}



