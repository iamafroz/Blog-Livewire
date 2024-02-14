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

    public $role ;

    public function mount(){
        $this->role = roles::pluck('id','name');
    }

    public function Save(){
        // dd($this->selected_role);
        // exit;

        
        $this->validate(); 

        
      User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            // 'roles' => role()->associate($this->role),
            'roles' => $this->selected_role,
        ]); 

        // $user->role()->associate($this->role); 

        // $user->save();

    //     session()->put(['name'=>$this->name,
    //     'email'=>User::where('email',$this->email)->first(),
    // ]);
    $this->reset(['name', 'email', 'password', 'selected_role']);

    
    }
    public function render()
    {
        return view('livewire.register',[
            // 'roles'=>User::with('role')->get(),
            // 'roles' => roles::all(),
        ]);
    }
}
