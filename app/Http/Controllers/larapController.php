<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class larapController extends Controller
{
    public function larap()
    {
        return view('admin.index');
    }
}
