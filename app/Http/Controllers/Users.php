<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class Users extends Controller
{  
    public function show()
    {
        return User::paginate();
    }

    public function showUser($userId)
    {
        $query = User::find($userId);
        if(!$query){
            return (['User not found!']);
        }

        return ($query->paginate());
    }

    protected function create(Request $data)
    {

        //TODO colocar validate
        
       return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }

}
