<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.manageprofile.edit',[
            'title' => 'Edit Profile',
            'menu' => 'Account',
            'menu1' => 'Manage'
        ]);
    }
}
