<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageTeacherController extends Controller
{
    public function index()
    {
        return view('admin.manageteacher.index',[
            'title' =>'Manage teacher',
            'menu' => 'User Management',
            'menu1' => 'Teacher'
        ]);
    }
}
