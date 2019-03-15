<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('members.list');
    }

    public function add()
    {
        return view('members.add');
    }
    public function insert()
    {
        
    }
}
