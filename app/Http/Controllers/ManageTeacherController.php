<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class ManageTeacherController extends Controller
{

    public function index()
    {
        if(auth()->guest()){
            abort(403);
        }
        return view('admin.manageteacher.index',[
            'title' =>'Manage teacher',
            'menu' => 'User Management',
            'menu1' => 'Teacher',
            'teachers' => Guru::all()
        ]);
    }

    public function create(){
        return view('admin.manageteacher.create',[
            'title' =>'Manage teacher',
            'menu' => 'User management',
            'menu1' => 'Add teacher'
        ]);
    }
}
