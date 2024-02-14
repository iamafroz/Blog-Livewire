<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\User;


class Login extends Component
{
    #[Validate('required|email')]
    public $email ;
    
    #[Validate('required|min:3')]
    public $password ;

    public function login(){
        $user = User::where('email',$this->email)->first() ;

        if(($this->email == $user['email'] ) && ($this->password == $user['password'])){

            session()->put(['email'=>$user['email'] , 
            'user_id'=> $user['id'],
            'user_name'=> $user['name'],
            'user_role'=> $user['role_id'],
        
        ]);
    }else{
        echo
        "Password is wrong";
    }

    $this->reset([ 'email', 'password']);

    return redirect('/');
}

    public function render()
    {
        return view('livewire.login',[
            'session' => session('user_id'),
        ]);
    }
}
