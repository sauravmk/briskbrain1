<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::all();
        return view('admin.user.index',compact('users'));
    }

    public function edit($id)
    {
        // dd($user);
        // exit;
        $user =  User::find($id);
        return view('admin.user.edit',compact('user'));

    }

    public function getNameAttribute()
    {
        return $this->name;
    }
}

