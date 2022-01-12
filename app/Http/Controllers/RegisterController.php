<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registration(Request $request)
    {
     
        $validateData = $request->validate([
            'name' => ['required','min:5'],
            'email' => ['required','email','unique:users'],
            'password' => ['required', 'min:5', 'max:125']
        ]);
        $validateData['password'] = Hash::make($request->password);
        $validateData['id_level'] = 2;
        $validateData['id_level'] = 2;
        User::create($validateData);
        return redirect('/')->with('success','Registration success!, please login.');
    
    }
}
