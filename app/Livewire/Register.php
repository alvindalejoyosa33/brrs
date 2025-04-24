<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $cpassword;

    public function render()
    {
        return view('livewire.register');
    }

    public function register(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ]);

        try{
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'user_role' => 'customer',
            ]);

            $this->resetVariables();

            return redirect()->route('/');
        }catch(Exception $e){
            throw $e;
        }

    }

    public function resetVariables(){
        $this->email = null;
        $this->password = null;
        $this->cpassword = null;
    }

}
