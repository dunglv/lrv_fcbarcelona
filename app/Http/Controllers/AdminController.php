<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.master.home');
    }
    public function login(){
    	return view('admin.auth.login');
    }
}
