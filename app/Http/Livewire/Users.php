<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;


class Users extends Component
{

    public $users,$name,$password,$email;
    public function render()
    {
        //obtengo toda la data
        $this->users=User::latest()->get();

        return view('livewire.users');
    }


    public function store(){
        //verifico la simbologia de los inputs
        $this->validate([
            'name'=>'required|min:3|max:10',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|max:10',
        ]);

            //realizo la carga a la bd
        User::create($this->all());

        $this->name='';
        $this->email='';
        $this->password='';
       // session()->put('message','Usuario creado correctamente (:');
        $this->success();

    }

    private function success(){
        //alert es la clave
        //Usuario creado es el valor
        $this->dispatchBrowserEvent('alert',['message'=>'Usuario creado']);

    }
}
